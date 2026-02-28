<?php

namespace App\Service;

use App\Entity\DemandeDevis;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;
use Twig\Environment;

class PdfGenerator
{
    /**
     * Dossier de stockage relatif à /public
     */
    private const UPLOAD_DIR = 'uploads/devis';

    public function __construct(
        private Environment $twig,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger,
        private string $projectDir
    ) {}

    /**
     * Retourne le chemin absolu du dossier de stockage des PDFs.
     */
    private function getUploadAbsoluteDir(): string
    {
        return $this->projectDir . '/public/' . self::UPLOAD_DIR;
    }

    /**
     * S'assure que le dossier d'upload existe.
     */
    private function ensureUploadDir(): void
    {
        $dir = $this->getUploadAbsoluteDir();
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    /**
     * Point d'entrée principal : retourne le contenu du PDF.
     * - Si un PDF existe déjà sur disque et en BDD → le réutilise.
     * - Sinon → génère, stocke sur disque, enregistre le chemin en BDD.
     */
    public function getOrGeneratePdf(DemandeDevis $demandeDevis): string
    {
        // 1. Vérifier si un PDF existe déjà
        $existingPath = $demandeDevis->getPdfPath();
        if ($existingPath) {
            $absolutePath = $this->projectDir . '/public/' . $existingPath;
            if (file_exists($absolutePath)) {
                $this->logger->info('PDF réutilisé depuis le cache', [
                    'devis_id' => $demandeDevis->getId(),
                    'path' => $existingPath,
                ]);
                return file_get_contents($absolutePath);
            }
            // Le fichier a été supprimé → on regénère
            $this->logger->warning('PDF introuvable sur disque, regénération', [
                'devis_id' => $demandeDevis->getId(),
                'path' => $existingPath,
            ]);
        }

        // 2. Générer le PDF
        $pdfContent = $this->renderPdf($demandeDevis);

        // 3. Stocker sur disque
        $this->ensureUploadDir();
        $filename = $this->generateFilename($demandeDevis);
        $relativePath = self::UPLOAD_DIR . '/' . $filename;
        $absolutePath = $this->projectDir . '/public/' . $relativePath;

        file_put_contents($absolutePath, $pdfContent);

        // 4. Sauvegarder le chemin en BDD
        $demandeDevis->setPdfPath($relativePath);
        $this->entityManager->flush();

        $this->logger->info('PDF généré et stocké', [
            'devis_id' => $demandeDevis->getId(),
            'path' => $relativePath,
            'size' => strlen($pdfContent),
        ]);

        return $pdfContent;
    }

    /**
     * Retourne le chemin absolu du PDF (génère si nécessaire).
     * Utile pour les pièces jointes email.
     */
    public function getOrGeneratePdfPath(DemandeDevis $demandeDevis): string
    {
        // S'assurer que le PDF existe
        $this->getOrGeneratePdf($demandeDevis);

        return $this->projectDir . '/public/' . $demandeDevis->getPdfPath();
    }

    /**
     * Invalide le PDF mis en cache (à appeler quand le devis est modifié).
     * Supprime le fichier sur disque et réinitialise le chemin en BDD.
     */
    public function invalidatePdf(DemandeDevis $demandeDevis): void
    {
        $pdfPath = $demandeDevis->getPdfPath();
        if ($pdfPath) {
            $absolutePath = $this->projectDir . '/public/' . $pdfPath;
            if (file_exists($absolutePath)) {
                unlink($absolutePath);
                $this->logger->info('PDF supprimé du cache', [
                    'devis_id' => $demandeDevis->getId(),
                    'path' => $pdfPath,
                ]);
            }
            $demandeDevis->setPdfPath(null);
            // Le flush sera fait par l'appelant (contrôleur)
        }
    }

    /**
     * Génère le nom du fichier PDF de manière unique.
     */
    private function generateFilename(DemandeDevis $demandeDevis): string
    {
        $numero = $demandeDevis->getNumeroDevis();
        // Ajouter un hash court pour éviter les collisions si regénération
        $hash = substr(md5((string) microtime(true)), 0, 6);
        return 'devis_' . $numero . '_' . $hash . '.pdf';
    }

    /**
     * Effectue le rendu PDF via Dompdf (optimisé).
     */
    private function renderPdf(DemandeDevis $demandeDevis): string
    {
        if (function_exists('set_time_limit')) {
            @set_time_limit(120);
        }

        // Augmenter la mémoire si nécessaire (hébergement mutualisé)
        $currentLimit = ini_get('memory_limit');
        if ($this->convertToBytes($currentLimit) < 256 * 1024 * 1024) {
            @ini_set('memory_limit', '256M');
        }

        // Options Dompdf optimisées
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', false);           // Pas d'images distantes → plus rapide
        $options->set('defaultFont', 'Helvetica');          // Police système → pas de chargement DejaVu
        $options->set('isFontSubsettingEnabled', true);     // Sous-ensemble de polices → fichier plus léger
        $options->set('chroot', $this->projectDir . '/public');
        $options->set('isPhpEnabled', false);               // Désactiver PHP dans les templates
        $options->set('debugKeepTemp', false);               // Pas de fichiers temporaires de debug
        $options->set('debugCss', false);
        $options->set('debugLayout', false);

        $dompdf = new Dompdf($options);

        // Logo en base64 (chargé une fois)
        $logoBase64 = $this->getLogoBase64();

        $html = $this->twig->render('demande_devis/pdf/devis.html.twig', [
            'devis' => $demandeDevis,
            'prix' => $demandeDevis->getPrix(),
            'client' => $demandeDevis->getClient(),
            'local' => $demandeDevis->getLocal(),
            'prestations' => $demandeDevis->getDemandePrestations(),
            'logoBase64' => $logoBase64,
            'dateGeneration' => new \DateTime(),
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }

    /**
     * Retourne le logo encodé en base64 (avec cache en mémoire).
     */
    private ?string $logoCache = null;

    private function getLogoBase64(): string
    {
        if ($this->logoCache !== null) {
            return $this->logoCache;
        }

        $logoPath = $this->projectDir . '/public/img/logo.png';
        if (file_exists($logoPath)) {
            $logoData = file_get_contents($logoPath);
            $this->logoCache = 'data:image/png;base64,' . base64_encode($logoData);
        } else {
            $this->logoCache = '';
        }

        return $this->logoCache;
    }

    /**
     * Convertit une valeur de mémoire PHP (ex : "128M") en bytes.
     */
    private function convertToBytes(string $value): int
    {
        $value = trim($value);
        $last = strtolower(substr($value, -1));
        $numericValue = (int) $value;

        return match ($last) {
            'g' => $numericValue * 1024 * 1024 * 1024,
            'm' => $numericValue * 1024 * 1024,
            'k' => $numericValue * 1024,
            default => $numericValue,
        };
    }
}
