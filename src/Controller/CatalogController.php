<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }

    #[Route('/catalog', name: 'app_subcatalog')]
    public function subcatalog(): Response
    {
        return $this->render('catalog/subcatalog.html.twig', [
            'controller_name' => 'SubcatalogController',
        ]);
    }

    #[Route('/catalog', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('catalog/product.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
