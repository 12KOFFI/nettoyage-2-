<?php

namespace App\Entity;

use App\Repository\LocalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocalRepository::class)]
class Local
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type_local = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column]
    private ?int $surface_m2 = null;

    /**
     * @var Collection<int, DemandeDevis>
     */
    #[ORM\OneToMany(targetEntity: DemandeDevis::class, mappedBy: 'local')]
    private Collection $demandeDevis;

    public function __construct()
    {
        $this->demandeDevis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeLocal(): ?string
    {
        return $this->type_local;
    }

    public function setTypeLocal(string $type_local): static
    {
        $this->type_local = $type_local;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getSurfaceM2(): ?int
    {
        return $this->surface_m2;
    }

    public function setSurfaceM2(int $surface_m2): static
    {
        $this->surface_m2 = $surface_m2;

        return $this;
    }

    /**
     * @return Collection<int, DemandeDevis>
     */
    public function getDemandeDevis(): Collection
    {
        return $this->demandeDevis;
    }

    public function addDemandeDevi(DemandeDevis $demandeDevi): static
    {
        if (!$this->demandeDevis->contains($demandeDevi)) {
            $this->demandeDevis->add($demandeDevi);
            $demandeDevi->setLocal($this);
        }

        return $this;
    }

    public function removeDemandeDevi(DemandeDevis $demandeDevi): static
    {
        if ($this->demandeDevis->removeElement($demandeDevi)) {
            // set the owning side to null (unless already changed)
            if ($demandeDevi->getLocal() === $this) {
                $demandeDevi->setLocal(null);
            }
        }

        return $this;
    }
}
