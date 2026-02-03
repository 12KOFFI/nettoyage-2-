<?php

namespace App\Entity;

use App\Repository\PrixRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrixRepository::class)]
class Prix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant_ht = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $remise = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $tva = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total_ttc = null;

    #[ORM\OneToOne(inversedBy: 'prix', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?DemandeDevis $demande_devis = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_creation = null;

    public function __construct()
    {
        $this->date_creation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantHt(): ?string
    {
        return $this->montant_ht;
    }

    public function setMontantHt(string $montant_ht): static
    {
        $this->montant_ht = $montant_ht;
        $this->calculateTotalTtc();
        return $this;
    }

    public function getRemise(): ?string
    {
        return $this->remise;
    }

    public function setRemise(?string $remise): static
    {
        $this->remise = $remise;
        $this->calculateTotalTtc();
        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(string $tva): static
    {
        $this->tva = $tva;
        $this->calculateTotalTtc();
        return $this;
    }

    public function getTotalTtc(): ?string
    {
        return $this->total_ttc;
    }

    public function setTotalTtc(string $total_ttc): static
    {
        $this->total_ttc = $total_ttc;
        return $this;
    }

    public function getDemandeDevis(): ?DemandeDevis
    {
        return $this->demande_devis;
    }

    public function setDemandeDevis(?DemandeDevis $demande_devis): static
    {
        $this->demande_devis = $demande_devis;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(?\DateTimeInterface $date_creation): static
    {
        $this->date_creation = $date_creation;
        return $this;
    }

    /**
     * Retourne la surface du local associé
     */
    public function getSurface(): float
    {
        if ($this->demande_devis && $this->demande_devis->getLocal()) {
            return (float) $this->demande_devis->getLocal()->getSurfaceM2();
        }
        return 1;
    }

    /**
     * Retourne le montant HT total (prix unitaire x surface)
     */
    public function getMontantHtTotal(): float
    {
        $prixUnitaire = (float) ($this->montant_ht ?? 0);
        $surface = $this->getSurface();
        return $prixUnitaire * $surface;
    }

    /**
     * Calcule automatiquement le total TTC
     */
    public function calculateTotalTtc(): void
    {
        $montantHtTotal = $this->getMontantHtTotal();
        $remise = (float) ($this->remise ?? 0);
        $tva = (float) ($this->tva ?? 0);

        $montantApresRemise = $montantHtTotal - $remise;
        $montantTva = $montantApresRemise * ($tva / 100);
        $this->total_ttc = number_format($montantApresRemise + $montantTva, 2, '.', '');
    }

    /**
     * Retourne le montant HT après remise
     */
    public function getMontantHtApresRemise(): float
    {
        $montantHtTotal = $this->getMontantHtTotal();
        $remise = (float) ($this->remise ?? 0);
        return $montantHtTotal - $remise;
    }

    /**
     * Retourne le montant de la TVA
     */
    public function getMontantTva(): float
    {
        $montantApresRemise = $this->getMontantHtApresRemise();
        $tva = (float) ($this->tva ?? 0);
        return $montantApresRemise * ($tva / 100);
    }
}
