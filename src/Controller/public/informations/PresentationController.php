<?php

namespace App\Controller\public\informations;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'app_presentation')]
    public function index(): Response
    {
        return $this->render('public/presentation/index.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
}
