<?php

namespace App\Controller\public\informations;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CGUController extends AbstractController
{
    #[Route('/CGU', name: 'app_cgu')]
    public function index(): Response
    {
        return $this->render('public/informations/cgu/index.html.twig', [
            'controller_name' => 'CGUController',
        ]);
    }
}
