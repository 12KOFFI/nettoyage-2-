<?php

namespace App\Controller;

use App\Repository\DemandeDevisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(DemandeDevisRepository $demandeDevisRepository): Response
    {
        $totalDevis = $demandeDevisRepository->count([]);
        $pendingDevis = $demandeDevisRepository->count(['statut' => 'en_attente']);
        $processedDevis = max(0, $totalDevis - $pendingDevis);
        $latestDevis = $demandeDevisRepository->findLatestForDashboard(8);

        return $this->render('dashboard/index.html.twig', [
            'totalDevis' => $totalDevis,
            'pendingDevis' => $pendingDevis,
            'processedDevis' => $processedDevis,
            'latestDevis' => $latestDevis,
        ]);
    }
}
