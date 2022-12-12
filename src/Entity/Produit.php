<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
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
}
