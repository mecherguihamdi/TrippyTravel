<?php

namespace App\Entity;

use App\Repository\CategorieAttractionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieAttractionRepository::class)
 */
class CategorieAttraction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $libelle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $contrainteAge;

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

    public function getContrainteAge(): ?bool
    {
        return $this->contrainteAge;
    }

    public function setContrainteAge(bool $contrainteAge): self
    {
        $this->contrainteAge = $contrainteAge;

        return $this;
    }
}
