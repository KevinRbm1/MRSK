<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: souscategorie::class)]
    private Collection $souscategorie;

    public function __construct()
    {
        $this->souscategorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, souscategorie>
     */
    public function getSouscategorie(): Collection
    {
        return $this->souscategorie;
    }

    public function addSouscategorie(souscategorie $souscategorie): self
    {
        if (!$this->souscategorie->contains($souscategorie)) {
            $this->souscategorie->add($souscategorie);
            $souscategorie->setCategorie($this);
        }

        return $this;
    }

    public function removeSouscategorie(souscategorie $souscategorie): self
    {
        if ($this->souscategorie->removeElement($souscategorie)) {
            // set the owning side to null (unless already changed)
            if ($souscategorie->getCategorie() === $this) {
                $souscategorie->setCategorie(null);
            }
        }

        return $this;
    }
}
