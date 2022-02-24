<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="object should not be blank")
     */
    private $object;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="write something")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reclamations")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=TypeRec::class, inversedBy="reclamations")
     * @ORM\JoinColumn(nullable=false)
     */
<<<<<<< HEAD
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;  
=======
    private $type;  
>>>>>>> 23237ae5853df956539087ac877ac45710134ae5


    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
<<<<<<< HEAD
            $this->status = "waiting";
=======
>>>>>>> 23237ae5853df956539087ac877ac45710134ae5
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    
    public function setClient(?User $client): self
    {
        $this->client = $client; 
        return $this;
    }

    public function getType(): ?TypeRec
    {
        return $this->type;
    }

    public function setType(?TypeRec $type): self
    {
        $this->type = $type;

        return $this;
    }

<<<<<<< HEAD
    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

=======
>>>>>>> 23237ae5853df956539087ac877ac45710134ae5
}
