<?php

namespace App\Entity;

use App\Repository\RelevesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RelevesRepository::class)]
class Releves
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $releveBrut = null;

    #[ORM\Column(length: 255)]
    private ?string $tableau = null;

    #[ORM\Column(length: 255)]
    private ?string $visualisation = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Lieu $lieu = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getReleveBrut(): ?string
    {
        return $this->releveBrut;
    }

    public function setReleveBrut(string $releveBrut): static
    {
        $this->releveBrut = $releveBrut;

        return $this;
    }

    public function getTableau(): ?string
    {
        return $this->tableau;
    }

    public function setTableau(string $tableau): static
    {
        $this->tableau = $tableau;

        return $this;
    }

    public function getVisualisation(): ?string
    {
        return $this->visualisation;
    }

    public function setVisualisation(string $visualisation): static
    {
        $this->visualisation = $visualisation;

        return $this;
    }

    public function getLieu(): ?Lieu
    {
        return $this->lieu;
    }

    public function setLieu(?Lieu $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }
}