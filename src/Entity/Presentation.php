<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PresentationRepository::class)]
class Presentation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo3 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text2 = null;

    #[ORM\Column(length: 255)]
    private ?string $banniere = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo5 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getPhoto1(): ?string
    {
        return $this->photo1;
    }

    public function setPhoto1(?string $photo1): static
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?string
    {
        return $this->photo2;
    }

    public function setPhoto2(?string $photo2): static
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?string
    {
        return $this->photo3;
    }

    public function setPhoto3(?string $photo3): static
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(string $text2): static
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getBanniere(): ?string
    {
        return $this->banniere;
    }

    public function setBanniere(string $banniere): static
    {
        $this->banniere = $banniere;

        return $this;
    }

    public function getPhoto4(): ?string
    {
        return $this->photo4;
    }

    public function setPhoto4(?string $photo4): static
    {
        $this->photo4 = $photo4;

        return $this;
    }

    public function getPhoto5(): ?string
    {
        return $this->photo5;
    }

    public function setPhoto5(?string $photo5): static
    {
        $this->photo5 = $photo5;

        return $this;
    }
}
