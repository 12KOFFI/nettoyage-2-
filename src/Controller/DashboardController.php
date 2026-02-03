<?php

namespace App\Controller;

use App\Repository\DemandeDevisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(DemandeDevisRepository $demandeDevisRepository): Response
    {
        $totalDevis = $demandeDevisRepository->count([]);
        $pendingDevis = $demandeDevisRepository->count(['statut' => 'en_attente']);
        $processedDevis = max(0, $totalDevis - $pendingDevis);
        $latestDevis = $demandeDevisRepository->findBy([], ['date_creation' => 'DESC'], 5);

        return $this->render('dashboard/index.html.twig', [
            'totalDevis' => $totalDevis,
            'pendingDevis' => $pendingDevis,
            'processedDevis' => $processedDevis,
            'latestDevis' => $latestDevis,
        ]);
    }
}
