<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Lenght(min=10)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity=Program::class, inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Program;

    /**
     * @ORM\ManyToOne(targetEntity=Program::class, inversedBy="review")
     */
    private $review;

    /**
     * @ORM\ManyToOne(targetEntity=Circuit::class, inversedBy="reviews")
     */
    private $reviews;

    /**
     * @ORM\Column(type="text")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email( message: 'The email {{ value }} is not a valid email.',)
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $reaction;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Assert\NotBlank
     */
    private $BeenWhen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getProgram(): ?Program
    {
        return $this->Program;
    }

    public function setProgram(?Program $Program): self
    {
        $this->Program = $Program;

        return $this;
    }

    public function getReview(): ?Program
    {
        return $this->review;
    }

    public function setReview(?Program $review): self
    {
        $this->review = $review;

        return $this;
    }

    public function getReviews(): ?Circuit
    {
        return $this->reviews;
    }

    public function setReviews(?Circuit $reviews): self
    {
        $this->reviews = $reviews;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getReaction(): ?string
    {
        return $this->reaction;
    }

    public function setReaction(string $reaction): self
    {
        $this->reaction = $reaction;

        return $this;
    }

    public function getBeenWhen(): ?\DateTimeInterface
    {
        return $this->BeenWhen;
    }

    public function setBeenWhen(\DateTimeInterface $BeenWhen): self
    {
        $this->BeenWhen = $BeenWhen;

        return $this;
    }
}
