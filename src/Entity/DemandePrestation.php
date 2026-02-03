<?php

namespace App\Entity;

use App\Repository\DemandePrestationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandePrestationRepository::class)]
class DemandePrestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $details_specifiques = null;

    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::TEXT, nullable: true)]
    private ?string $admin_description = null;

    #[ORM\ManyToOne(inversedBy: 'demandePrestations')]
    private ?DemandeDevis $Demande_devis = null;

    #[ORM\ManyToOne(inversedBy: 'demandePrestations')]
    private ?Prestation $prestation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetailsSpecifiques(): ?string
    {
        return $this->details_specifiques;
    }

    public function setDetailsSpecifiques(?string $details_specifiques): static
    {
        $this->details_specifiques = $details_specifiques;

        return $this;
    }

    public function getAdminDescription(): ?string
    {
        return $this->admin_description;
    }

    public function setAdminDescription(?string $admin_description): static
    {
        $this->admin_description = $admin_description;

        return $this;
    }

    public function getDemandeDevis(): ?DemandeDevis
    {
        return $this->Demande_devis;
    }

    public function setDemandeDevis(?DemandeDevis $Demande_devis): static
    {
        $this->Demande_devis = $Demande_devis;

        return $this;
    }

    public function getPrestation(): ?Prestation
    {
        return $this->prestation;
    }

    public function setPrestation(?Prestation $prestation): static
    {
        $this->prestation = $prestation;

        return $this;
    }
}
