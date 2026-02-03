<?php

namespace App\Entity;

use App\Repository\DemandeDevisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeDevisRepository::class)]
class DemandeDevis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $creneau_horaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_demande = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(length: 255)]
    private ?string $frequence = null;

    #[ORM\ManyToOne(inversedBy: 'demandeDevis')]
    private ?Client $client = null;

    #[ORM\ManyToOne(inversedBy: 'demandeDevis')]
    private ?Local $local = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    /**
     * @var Collection<int, DemandePrestation>
     */
    #[ORM\OneToMany(targetEntity: DemandePrestation::class, mappedBy: 'Demande_devis')]
    private Collection $demandePrestations;

    #[ORM\OneToOne(mappedBy: 'demande_devis', cascade: ['persist', 'remove'])]
    private ?Prix $prix = null;

    public function __construct()
    {
        $this->demandePrestations = new ArrayCollection();
        $this->date_creation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreneauHoraire(): ?string
    {
        return $this->creneau_horaire;
    }

    public function setCreneauHoraire(string $creneau_horaire): static
    {
        $this->creneau_horaire = $creneau_horaire;

        return $this;
    }

    public function getDateDemande(): ?\DateTime
    {
        return $this->date_demande;
    }

    public function setDateDemande(\DateTime $date_demande): static
    {
        $this->date_demande = $date_demande;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): static
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getLocal(): ?Local
    {
        return $this->local;
    }

    public function setLocal(?Local $local): static
    {
        $this->local = $local;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

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
            $demandePrestation->setDemandeDevis($this);
        }

        return $this;
    }

    public function removeDemandePrestation(DemandePrestation $demandePrestation): static
    {
        if ($this->demandePrestations->removeElement($demandePrestation)) {
            // set the owning side to null (unless already changed)
            if ($demandePrestation->getDemandeDevis() === $this) {
                $demandePrestation->setDemandeDevis(null);
            }
        }

        return $this;
    }

    public function getPrix(): ?Prix
    {
        return $this->prix;
    }

    public function setPrix(?Prix $prix): static
    {
        // unset the owning side of the relation if necessary
        if ($prix === null && $this->prix !== null) {
            $this->prix->setDemandeDevis(null);
        }

        // set the owning side of the relation if necessary
        if ($prix !== null && $prix->getDemandeDevis() !== $this) {
            $prix->setDemandeDevis($this);
        }

        $this->prix = $prix;

        return $this;
    }

    /**
     * Génère un numéro de devis unique
     */
    public function getNumeroDevis(): string
    {
        $date = $this->date_demande ?? new \DateTime();
        return 'DEV-' . $date->format('Ymd') . '-' . str_pad((string) $this->id, 4, '0', STR_PAD_LEFT);
    }

    /**
     * Vérifie si toutes les prestations ont une description admin renseignée
     */
    public function hasAllAdminDescriptions(): bool
    {
        if ($this->demandePrestations->isEmpty()) {
            return false;
        }

        foreach ($this->demandePrestations as $demandePrestation) {
            if (empty($demandePrestation->getAdminDescription())) {
                return false;
            }
        }

        return true;
    }
}
