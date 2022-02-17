<?php

namespace App\Entity;

use App\Repository\AttractionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AttractionRepository::class)
 */
class Attraction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @Assert\
     * Length(max=25)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     * @Assert\
     * Length(max=30)
     */
    private $localisation;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     * @Assert\
     * Length(max=30)
     */
    private $horraire;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieAttraction::class, inversedBy="attraction")
     */
    private $id_categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getHorraire(): ?string
    {
        return $this->horraire;
    }

    public function setHorraire(?string $horraire): self
    {
        $this->horraire = $horraire;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdCategorie(): ?CategorieAttraction
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?CategorieAttraction $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }
}
