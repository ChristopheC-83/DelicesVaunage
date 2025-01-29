<?php

namespace App\Controller\public\informations;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LegalController extends AbstractController
{
    #[Route('/legal', name: 'app_legal')]
    public function index(): Response
    {
        return $this->render('public/informations/legal/index.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }
}
