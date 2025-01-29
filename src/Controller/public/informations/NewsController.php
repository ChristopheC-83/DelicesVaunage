<?php

namespace App\Controller\public\informations;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NewsController extends AbstractController
{
    #[Route('/news', name: 'app_news')]
    public function index(): Response
    {
        return $this->render('public/informations/news/index.html.twig', [
            'controller_name' => 'NewsController',
        ]);
    }
}
