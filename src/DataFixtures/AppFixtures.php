<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\Souscategorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $p1 = new Produit();
        $p1->setLibelle("Mahou Sensei Negima");
        $p1->setPrix("4.99");
        $p1->setImage("1192.jpg");
        $p1->setDescription("Springfield Negi, un jeune garçon de 10 ans, vient d'être diplômé d'une école de Magie, dont l'existence doit rester secrète.
        Chaque diplôme donne une action à faire pour la communauté, et Negi doit devenir...
        Un professeur dans un collège.
        A son arrivée, il eut la charge d'un classe, de 31 élèves, toutes plus bizarres les unes que les autres...
        Notre petit magicien aura bien du mal à cacher son secret...");
        $manager->persist($p1);

        $c1 = new Categorie();
        $c1->setCategorie("Aventure");
        $manager->persist($c1);
        
        $sc1 = new Souscategorie();
        $sc1-> setSouscategorie("Magie");
        $sc1-> setCategorie_id($c1); //a changer
        $manager->persist($sc1);

        
        $manager->flush();
    }

}