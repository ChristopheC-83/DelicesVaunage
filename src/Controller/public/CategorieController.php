<?php

namespace App\Controller\public;

use App\Repository\ProductsRepository;
use App\Repository\SectionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategorieController extends AbstractController
{

    private $sectionRepository;
    private $productsRepository;

    public function __construct(SectionsRepository $sectionRepository, ProductsRepository $productsRepository)
    {
        $this->sectionRepository = $sectionRepository;
        $this->productsRepository = $productsRepository;
    }

    #[Route('/categorie/{categorie}', name: 'app_categorie')]
    public function index($categorie): Response
    {
        $categorie = $this->sectionRepository->findOneBy(['slug' => $categorie, 'isVisible' => true]);
        $products = $this->productsRepository->findBy(
            ['section' => $categorie, 'is_visible' => true], 
            ['position' => 'ASC'] 
        );


        return $this->render('public/categorie/index.html.twig', [
            'categorie' => $categorie,
            'products' => $products
        ]);
    }
}
