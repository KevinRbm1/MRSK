<?php

namespace App\Entity;
use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\ManyToOne]
    private ?souscategorie $souscategorie = null;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Prix = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column(length: 2000)]
    private ?string $Description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getSouscategorie(): ?souscategorie
    {
        return $this->souscategorie;
    }

    public function setSouscategorie(?souscategorie $souscategorie): self
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->Prix;
    }

    public function setPrix(string $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
