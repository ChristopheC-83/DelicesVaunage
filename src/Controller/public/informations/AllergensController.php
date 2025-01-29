<?php

namespace App\Controller\public\informations;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AllergensController extends AbstractController
{
    #[Route('/allergens', name: 'app_allergens')]
    public function index(): Response
    {
        return $this->render('public/informations/allergens/index.html.twig', [
            'controller_name' => 'AllergensController',
        ]);
    }
}
