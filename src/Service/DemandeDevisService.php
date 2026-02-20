<?php

namespace App\Service;

use App\Entity\Client;
use App\Entity\DemandeDevis;
use App\Entity\DemandePrestation;
use App\Entity\Local;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;

class DemandeDevisService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Crée une nouvelle demande de devis à partir des données du formulaire
     */
    public function createFromForm(FormInterface $form, DemandeDevis $demandeDevis): void
    {
        // Créer le Client
        $client = new Client();
        $client->setNom($form->get('client_nom')->getData());
        $client->setPrenom($form->get('client_prenom')->getData());
        $client->setEmail($form->get('client_email')->getData());
        $client->setTelephone($form->get('client_telephone')->getData());
        $this->entityManager->persist($client);
        
        // Créer le Local
        $local = new Local();
        $local->setTypeLocal($form->get('local_type')->getData());
        $local->setVille($form->get('local_ville')->getData());
        $local->setSurfaceM2($form->get('local_surface')->getData());
        $this->entityManager->persist($local);
        
        // Configurer la DemandeDevis
        $demandeDevis->setClient($client);
        $demandeDevis->setLocal($local);
        $demandeDevis->setDateDemande(new \DateTime());
        $demandeDevis->setStatut('en_attente');
        $this->entityManager->persist($demandeDevis);
        
        // Créer les DemandePrestation
        $this->createPrestationsFromForm($form, $demandeDevis);
        
        $this->entityManager->flush();
    }

    /**
     * Met à jour une demande de devis existante à partir des données du formulaire
     */
    public function updateFromForm(FormInterface $form, DemandeDevis $demandeDevis): void
    {
        // Mettre à jour le Client
        $client = $demandeDevis->getClient();
        if ($client) {
            $client->setNom($form->get('client_nom')->getData());
            $client->setPrenom($form->get('client_prenom')->getData());
            $client->setEmail($form->get('client_email')->getData());
            $client->setTelephone($form->get('client_telephone')->getData());
        }

        // Mettre à jour le Local
        $local = $demandeDevis->getLocal();
        if ($local) {
            $local->setTypeLocal($form->get('local_type')->getData());
            $local->setVille($form->get('local_ville')->getData());
            $local->setSurfaceM2($form->get('local_surface')->getData());
        }

        $prestations = $form->get('prestation')->getData();
        $detailsSpecifiques = $form->get('details_specifiques')->getData() ?? '';

        // Récupérer les prestations existantes (hors "Autre")
        $existing = [];
        foreach ($demandeDevis->getDemandePrestations() as $demandePrestation) {
            if ($demandePrestation->getPrestation()) {
                $existing[$demandePrestation->getPrestation()->getId()] = $demandePrestation;
            }
        }

        // Mettre à jour ou créer les prestations sélectionnées
        $selectedIds = [];
        foreach ($prestations as $prestation) {
            $selectedIds[] = $prestation->getId();
            if (isset($existing[$prestation->getId()])) {
                $existing[$prestation->getId()]->setDetailsSpecifiques($detailsSpecifiques);
            } else {
                $demandePrestation = new DemandePrestation();
                $demandePrestation->setDemandeDevis($demandeDevis);
                $demandePrestation->setPrestation($prestation);
                $demandePrestation->setDetailsSpecifiques($detailsSpecifiques);
                $this->entityManager->persist($demandePrestation);
            }
        }

        // Supprimer les prestations désélectionnées
        foreach ($demandeDevis->getDemandePrestations() as $demandePrestation) {
            $prestation = $demandePrestation->getPrestation();
            if ($prestation && !in_array($prestation->getId(), $selectedIds, true)) {
                $this->entityManager->remove($demandePrestation);
            }
        }

        // Gérer la prestation "Autre"
        $this->updatePrestationAutre($form, $demandeDevis);

        $this->entityManager->flush();
    }

    /**
     * Prépare le formulaire avec les données existantes d'une demande de devis
     */
    public function populateFormWithDemandeDevis(FormInterface $form, DemandeDevis $demandeDevis): void
    {
        // Remplir les données du client
        if ($demandeDevis->getClient()) {
            $form->get('client_nom')->setData($demandeDevis->getClient()->getNom());
            $form->get('client_prenom')->setData($demandeDevis->getClient()->getPrenom());
            $form->get('client_email')->setData($demandeDevis->getClient()->getEmail());
            $form->get('client_telephone')->setData($demandeDevis->getClient()->getTelephone());
        }

        // Remplir les données du local
        if ($demandeDevis->getLocal()) {
            $form->get('local_type')->setData($demandeDevis->getLocal()->getTypeLocal());
            $form->get('local_ville')->setData($demandeDevis->getLocal()->getVille());
            $form->get('local_surface')->setData($demandeDevis->getLocal()->getSurfaceM2());
        }

        // Remplir les prestations
        if ($demandeDevis->getDemandePrestations()->count() > 0) {
            $selectedPrestations = [];
            $prestationAutreText = null;

            foreach ($demandeDevis->getDemandePrestations() as $demandePrestation) {
                if ($demandePrestation->getPrestation()) {
                    $selectedPrestations[] = $demandePrestation->getPrestation();
                    if ($demandePrestation->getDetailsSpecifiques()) {
                        $form->get('details_specifiques')->setData($demandePrestation->getDetailsSpecifiques());
                    }
                } else {
                    // C'est la prestation "Autre"
                    $prestationAutreText = $demandePrestation->getDetailsSpecifiques();
                }
            }

            $form->get('prestation')->setData($selectedPrestations);
            if ($prestationAutreText) {
                $form->get('prestation_autre')->setData($prestationAutreText);
            }
        }
    }

    /**
     * Crée les DemandePrestation à partir du formulaire
     */
    private function createPrestationsFromForm(FormInterface $form, DemandeDevis $demandeDevis): void
    {
        // Créer les DemandePrestation pour les prestations sélectionnées
        $prestations = $form->get('prestation')->getData();
        $detailsSpecifiques = $form->get('details_specifiques')->getData() ?? '';

        if ($prestations) {
            foreach ($prestations as $prestation) {
                $demandePrestation = new DemandePrestation();
                $demandePrestation->setDemandeDevis($demandeDevis);
                $demandePrestation->setPrestation($prestation);
                $demandePrestation->setDetailsSpecifiques($detailsSpecifiques);
                $this->entityManager->persist($demandePrestation);
            }
        }

        // Créer une DemandePrestation "Autre" si renseignée
        $prestationAutre = $form->get('prestation_autre')->getData();
        if (!empty($prestationAutre)) {
            $demandePrestationAutre = new DemandePrestation();
            $demandePrestationAutre->setDemandeDevis($demandeDevis);
            $demandePrestationAutre->setPrestation(null);
            $demandePrestationAutre->setDetailsSpecifiques($prestationAutre);
            $this->entityManager->persist($demandePrestationAutre);
        }
    }

    /**
     * Met à jour la prestation "Autre" pour une demande existante
     */
    private function updatePrestationAutre(FormInterface $form, DemandeDevis $demandeDevis): void
    {
        $prestationAutre = $form->get('prestation_autre')->getData();
        $demandePrestationAutre = null;

        // Trouver la prestation "Autre" existante
        foreach ($demandeDevis->getDemandePrestations() as $dp) {
            if ($dp->getPrestation() === null) {
                $demandePrestationAutre = $dp;
                break;
            }
        }

        if (!empty($prestationAutre)) {
            if ($demandePrestationAutre) {
                // Mettre à jour l'existante
                $demandePrestationAutre->setDetailsSpecifiques($prestationAutre);
            } else {
                // Créer une nouvelle
                $newDemandePrestationAutre = new DemandePrestation();
                $newDemandePrestationAutre->setDemandeDevis($demandeDevis);
                $newDemandePrestationAutre->setPrestation(null);
                $newDemandePrestationAutre->setDetailsSpecifiques($prestationAutre);
                $this->entityManager->persist($newDemandePrestationAutre);
            }
        } else {
            // Supprimer si vide
            if ($demandePrestationAutre) {
                $this->entityManager->remove($demandePrestationAutre);
            }
        }
    }
}
