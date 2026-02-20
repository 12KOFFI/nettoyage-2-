<?php

namespace App\Service;

use App\Entity\DemandeDevis;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class PdfGenerator
{
    public function __construct(
        private Environment $twig,
        private string $projectDir
    ) {
    }

    /**
     * Génère un PDF pour un devis
     */
    public function generateDevisPdf(DemandeDevis $demandeDevis): string
    {
        if (function_exists('set_time_limit')) {
            @set_time_limit(120);
        }

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', false);
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isFontSubsettingEnabled', true);
        $options->set('chroot', $this->projectDir . '/public');

        $dompdf = new Dompdf($options);

        $logoPath = $this->projectDir . '/public/img/logo.png';
        $logoBase64 = '';
        if (file_exists($logoPath)) {
            $logoData = file_get_contents($logoPath);
            $logoBase64 = 'data:image/png;base64,' . base64_encode($logoData);
        }

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
     * Génère et sauvegarde le PDF dans un fichier temporaire
     */
    public function generateDevisPdfToFile(DemandeDevis $demandeDevis): string
    {
        $pdfContent = $this->generateDevisPdf($demandeDevis);
        
        $filename = 'devis_' . $demandeDevis->getNumeroDevis() . '.pdf';
        $filepath = sys_get_temp_dir() . '/' . $filename;
        
        file_put_contents($filepath, $pdfContent);
        
        return $filepath;
    }
}
