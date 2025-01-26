<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_public_contact')]
    public function index(): Response
    {
        return $this->render('public/contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
