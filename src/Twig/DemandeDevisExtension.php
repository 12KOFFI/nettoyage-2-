<?php

namespace App\Twig;

use App\Repository\DemandeDevisRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class DemandeDevisExtension extends AbstractExtension
{
    private DemandeDevisRepository $demandeDevisRepository;
    private ?int $cachedCount = null;

    public function __construct(DemandeDevisRepository $demandeDevisRepository)
    {
        $this->demandeDevisRepository = $demandeDevisRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('count_pending_devis', [$this, 'countPendingDevis']),
        ];
    }

    public function countPendingDevis(): int
    {
        if ($this->cachedCount === null) {
            $this->cachedCount = $this->demandeDevisRepository->count(['statut' => 'en_attente']);
        }

        return $this->cachedCount;
    }
}
