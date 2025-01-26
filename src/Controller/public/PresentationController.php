<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PresentationController extends AbstractController
{
    #[Route('/public/presentation', name: 'app_public_presentation')]
    public function index(): Response
    {
        return $this->render('public/presentation/index.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
}
