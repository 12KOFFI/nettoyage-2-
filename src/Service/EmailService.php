<?php

namespace App\Service;

use App\Entity\DemandeDevis;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailService
{
    public function __construct(
        private MailerInterface $mailer,
        private PdfGenerator $pdfGenerator,
        private Environment $twig,
        private string $adminEmail
    ) {
    }

    /**
     * Envoie le devis par email au client avec le PDF en pièce jointe
     * 
     * @throws \Exception Si l'envoi échoue
     */
    public function sendDevisToClient(DemandeDevis $demandeDevis): void
    {
        $client = $demandeDevis->getClient();
        
        if (!$client || !$client->getEmail()) {
            throw new \Exception('Aucune adresse email client disponible.');
        }

        if (!$demandeDevis->getPrix()) {
            throw new \Exception('Le devis doit avoir un prix avant d\'être envoyé.');
        }

        // Générer le PDF
        $pdfContent = $this->pdfGenerator->generateDevisPdf($demandeDevis);
        
        // Créer l'email
        $email = (new Email())
            ->from('isaacndri5@gmail.com')
            ->to($client->getEmail())
            ->subject('Votre devis ' . $demandeDevis->getNumeroDevis() . ' - Multi-Nettoyage Propreté Plus 94')
            ->html($this->twig->render('demande_devis/email/devis.html.twig', [
                'devis' => $demandeDevis,
                'client' => $client,
            ]))
            ->attach($pdfContent, $demandeDevis->getNumeroDevis() . '.pdf', 'application/pdf');

        // Envoyer l'email
        $this->mailer->send($email);
    }

    /**
     * Notifie l'admin d'une nouvelle demande de devis
     */
    public function sendNewDemandeDevisNotification(DemandeDevis $demandeDevis): void
    {
        $client = $demandeDevis->getClient();
        $clientName = $client ? trim($client->getPrenom() . ' ' . $client->getNom()) : 'Client non renseigné';
        $clientEmail = $client ? $client->getEmail() : null;

        $fromEmail = $clientEmail ?: $this->adminEmail;

        $email = (new Email())
            ->from($fromEmail)
            ->to($this->adminEmail)
            ->subject('Nouvelle demande de devis reçue')
            ->html($this->twig->render('demande_devis/email/new_demande.html.twig', [
                'demande' => $demandeDevis,
                'clientName' => $clientName,
                'clientEmail' => $clientEmail ?? 'Email non renseigné',
            ]));

        $this->mailer->send($email);
    }

    /**
     * Retourne l'adresse email du destinataire pour un devis
     */
    public function getClientEmail(DemandeDevis $demandeDevis): ?string
    {
        $client = $demandeDevis->getClient();
        return $client ? $client->getEmail() : null;
    }
}
