<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SouscategorieRepository;

#[ORM\Entity(repositoryClass: SouscategorieRepository::class)]
class Souscategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $souscategorie = null;

    #[ORM\ManyToOne(inversedBy: 'souscategorie')]
    private ?Categorie $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSouscategorie(): ?string
    {
        return $this->souscategorie;
    }

    public function setSouscategorie(string $souscategorie): self
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
