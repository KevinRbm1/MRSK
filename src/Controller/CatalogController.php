<?php

namespace App\Controller;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function category(): Response
    {
        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'categorie',
        ]);
    }

    #[Route('/souscategorie', name: 'app_souscategorie')]
    public function subcatalog(): Response
    {
        return $this->render('catalog/subcategory.html.twig', [
            'controller_name' => 'sousCategorie',
        ]);
    }

    #[Route('/produit', name: 'app_produit')]
    public function product(): Response
    {
        return $this->render('catalog/product.html.twig', [
            'controller_name' => 'Produit',
        ]);
    }
}
