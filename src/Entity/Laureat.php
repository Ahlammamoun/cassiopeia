<?php

namespace App\Entity;

use App\Repository\LaureatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LaureatRepository::class)
 */
class Laureat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $firstname;

    /**
     * @ORM\Column(type="text")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diplomas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDiplomas(): ?string
    {
        return $this->diplomas;
    }

    public function setDiplomas(string $diplomas): self
    {
        $this->diplomas = $diplomas;

        return $this;
    }
}
