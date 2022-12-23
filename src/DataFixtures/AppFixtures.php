<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\Souscategorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $h) {
    $this->hasher = $h;
}
    public function load(ObjectManager $manager): void
    {
        $u1 = new User();
        $u1->setEmail("mrsk@gmail.com");
        $u1->setRoles(["ROLE_USER"]);
        $u1->setPassword($this->hasher->hashPassword($u1, "1234"));
        $manager->persist($u1);

  
        $sc1 = new Souscategorie();
        $sc1-> setSouscategorie("Magie");
        $manager->persist($sc1);

        $sc2 = new Souscategorie();
        $sc2->setSouscategorie('Fantasy');
        $manager->persist($sc2);

        $c1 = new Categorie();
        $c1->setCategorie("Aventure");
        $c1->addSouscategorie($sc1);
        $manager->persist($c1);

        $a = new Categorie();
        $a-> setCategorie("Action");
        $a-> addSouscategorie($sc2);
        $manager->persist($a);
        
        $p2 = new Produit();
        $p2->setProduit('Manga');
        $p2->setLibelle("Mahou Sensei Negima vol.2");
        $p2->setPrix("4.99");
        $p2->setImage("1193.jpg");
        $p2->setSouscategorie($sc2);
        $p1->setDescription("Negi le petit professeur s'est maintenant bien intégré a la classe des 2-A, mais une nouvelle catastrophique tombe : Si il ne parvient pas a éviter la dernière place aux examens de fin de trimestre a sa classe, il n'obtiendra pas sa titularisation...
        Néanmoins, ce n'est pas ce qui parvient aux oreilles de certaines fille de sa classe pour elles, les dernières aux examens redoubleront et retournerons au collège.
        Elles décident alors de s'aventurer dans la bibliothèque de l'école Mahora pour y trouver un un livre magique qui rendrait la personne qui le lit intelligente...");
        $manager->persist($p2);


        $p1 = new Produit();
        $p1->setProduit('Manga');
        $p1->setLibelle("Mahou Sensei Negima");
        $p1->setPrix("4.99");
        $p1->setImage("1192.jpg");
        $p1->setSouscategorie($sc1);
        $p1->setDescription("Springfield Negi, un jeune garçon de 10 ans, vient d'être diplômé d'une école de Magie, dont l'existence doit rester secrète.
        Chaque diplôme donne une action à faire pour la communauté, et Negi doit devenir...
        Un professeur dans un collège.
        A son arrivée, il eut la charge d'un classe, de 31 élèves, toutes plus bizarres les unes que les autres...
        Notre petit magicien aura bien du mal à cacher son secret...");


        $manager->persist($p1);

  

        
        $manager->flush();
    }

}
