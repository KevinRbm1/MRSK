<?php

namespace App\DataFixtures;
use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\Souscategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

} 
