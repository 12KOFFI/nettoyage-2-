<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\DemandeDevis;
use App\Entity\DemandePrestation;
use App\Entity\Local;
use App\Entity\Prix;
use App\Form\DemandeDevisType;
use App\Form\PrixType;
use App\Repository\DemandeDevisRepository;
use App\Service\DemandeDevisService;
use App\Service\EmailService;
use App\Service\PdfGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/demande/devis')]
final class DemandeDevisController extends AbstractController
{
    #[Route('/liste', name: 'app_demande_devis_liste', methods: ['GET'])]
    public function liste(Request $request, DemandeDevisRepository $repository): Response
    {
        // Récupération des filtres depuis la requête
        $filters = [
            'date_debut' => $request->query->get('date_debut'),
            'date_fin' => $request->query->get('date_fin'),
            'email' => $request->query->get('email'),
            'statut' => $request->query->get('statut', 'tous'),
        ];

        // Pagination
        $page = max(1, (int) $request->query->get('page', 1));
        $limit = 20;

        // Récupération des devis avec filtres
        $devis = $repository->findWithFilters($filters, $page, $limit);
        $totalDevis = $repository->countWithFilters($filters);
        $totalPages = (int) ceil($totalDevis / $limit);

        return $this->render('demande_devis/liste.html.twig', [
            'devis' => $devis,
            'filters' => $filters,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalDevis' => $totalDevis,
        ]);
    }

    #[Route(name: 'app_demande_devis_index', methods: ['GET', 'POST'])]
    public function index(Request $request, DemandeDevisService $demandeDevisService): Response
    {
        $demandeDevis = new DemandeDevis();
        $form = $this->createForm(DemandeDevisType::class, $demandeDevis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandeDevisService->createFromForm($form, $demandeDevis);
            $this->addFlash('success', 'Votre demande de devis a été envoyée avec succès ! Nous vous recontacterons dans les plus brefs délais.');
            return $this->redirectToRoute('app_demande_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_devis/index.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/new', name: 'app_demande_devis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EmailService $emailService, LoggerInterface $logger): Response
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm(DemandeDevisType::class, $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demandeDevi);
            $entityManager->flush();

            try {
                $emailService->sendNewDemandeDevisNotification($demandeDevi);
            } catch (\Throwable $exception) {
                $logger->error('Erreur envoi email notification nouvelle demande devis', [
                    'demande_devis_id' => $demandeDevi->getId(),
                    'exception' => $exception,
                ]);
                $this->addFlash('error', "Impossible d'envoyer l'email de confirmation pour le moment. Veuillez réessayer plus tard.");
            }

            return $this->redirectToRoute('app_demande_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_devis/new.html.twig', [
            'demande_devi' => $demandeDevi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_devis_show', methods: ['GET', 'POST'])]
    public function show(Request $request, DemandeDevis $demandeDevis, EntityManagerInterface $entityManager): Response
    {
        $prix = $demandeDevis->getPrix() ?? new Prix();
        $prixForm = $this->createForm(PrixType::class, $prix);
        $prixForm->handleRequest($request);

        if ($prixForm->isSubmitted() && $prixForm->isValid()) {
            $prix->setDemandeDevis($demandeDevis);
            $prix->calculateTotalTtc();
            $entityManager->persist($prix);
            $entityManager->flush();

            $this->addFlash('success', 'Le prix a été enregistré avec succès.');
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        return $this->render('demande_devis/show.html.twig', [
            'devis' => $demandeDevis,
            'prixForm' => $prixForm,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_devis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeDevis $demandeDevi, DemandeDevisService $demandeDevisService): Response
    {
        $form = $this->createForm(DemandeDevisType::class, $demandeDevi);
        $demandeDevisService->populateFormWithDemandeDevis($form, $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandeDevisService->updateFromForm($form, $demandeDevi);
            return $this->redirectToRoute('app_demande_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_devis/edit.html.twig', [
            'demande_devi' => $demandeDevi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_devis_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeDevis $demandeDevi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $demandeDevi->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($demandeDevi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_devis_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/pdf', name: 'app_demande_devis_pdf', methods: ['GET'])]
    public function downloadPdf(DemandeDevis $demandeDevis, PdfGenerator $pdfGenerator): Response
    {
        if (!$demandeDevis->getPrix()) {
            $this->addFlash('error', "Veuillez d'abord renseigner un prix pour ce devis.");
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        $pdfContent = $pdfGenerator->generateDevisPdf($demandeDevis);

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $demandeDevis->getNumeroDevis() . '.pdf"',
        ]);
    }

    #[Route('/{id}/email', name: 'app_demande_devis_email', methods: ['POST'])]
    public function sendEmail(Request $request, DemandeDevis $demandeDevis, EmailService $emailService, LoggerInterface $logger): Response
    {
        if (!$this->isCsrfTokenValid('email' . $demandeDevis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        try {
            $emailService->sendDevisToClient($demandeDevis);
            $clientEmail = $emailService->getClientEmail($demandeDevis);
            $this->addFlash('success', 'Le devis a été envoyé par email à ' . $clientEmail);
        } catch (\Throwable $e) {
            $logger->error('Erreur envoi devis par email au client', [
                'demande_devis_id' => $demandeDevis->getId(),
                'client_email' => $emailService->getClientEmail($demandeDevis),
                'exception' => $e,
            ]);
            $this->addFlash('error', "Impossible d'envoyer l'email au client pour le moment. Veuillez vérifier l'adresse email ou réessayer plus tard.");
        }

        return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
    }

    #[Route('/{id}/valider', name: 'app_demande_devis_valider', methods: ['POST'])]
    public function valider(Request $request, DemandeDevis $demandeDevis, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('valider' . $demandeDevis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        if (!$demandeDevis->getPrix()) {
            $this->addFlash('error', "Veuillez d'abord renseigner un prix pour ce devis.");
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        $demandeDevis->setStatut('valide');
        $entityManager->flush();

        $this->addFlash('success', 'Le devis a été validé avec succès.');
        return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
    }

    #[Route('/{id}/prestations', name: 'app_demande_devis_prestations', methods: ['POST'])]
    public function updatePrestations(Request $request, DemandeDevis $demandeDevis, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('prestations' . $demandeDevis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
        }

        $descriptions = $request->request->all('admin_description');
        foreach ($demandeDevis->getDemandePrestations() as $demandePrestation) {
            $id = $demandePrestation->getId();
            if (isset($descriptions[$id])) {
                $demandePrestation->setAdminDescription(trim((string) $descriptions[$id]));
            }
        }

        $entityManager->flush();
        $this->addFlash('success', 'Descriptions des prestations mises à jour.');

        return $this->redirectToRoute('app_demande_devis_show', ['id' => $demandeDevis->getId()]);
    }
}
