<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationRepository::class)]
class Prestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code_prestation = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    /**
     * @var Collection<int, DemandePrestation>
     */
    #[ORM\OneToMany(targetEntity: DemandePrestation::class, mappedBy: 'prestation')]
    private Collection $demandePrestations;

    public function __construct()
    {
        $this->demandePrestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePrestation(): ?string
    {
        return $this->code_prestation;
    }

    public function setCodePrestation(string $code_prestation): static
    {
        $this->code_prestation = $code_prestation;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, DemandePrestation>
     */
    public function getDemandePrestations(): Collection
    {
        return $this->demandePrestations;
    }

    public function addDemandePrestation(DemandePrestation $demandePrestation): static
    {
        if (!$this->demandePrestations->contains($demandePrestation)) {
            $this->demandePrestations->add($demandePrestation);
            $demandePrestation->setPrestation($this);
        }

        return $this;
    }

    public function removeDemandePrestation(DemandePrestation $demandePrestation): static
    {
        if ($this->demandePrestations->removeElement($demandePrestation)) {
            // set the owning side to null (unless already changed)
            if ($demandePrestation->getPrestation() === $this) {
                $demandePrestation->setPrestation(null);
            }
        }

        return $this;
    }
}
