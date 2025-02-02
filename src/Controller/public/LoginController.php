<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUserName = $authenticationUtils->getLastUsername();


        //          afinanarh1516@gmail.com
        //          Delices_30420_Vaunage


        return $this->render('public/login/index.html.twig', [
            'last_username' => $lastUserName,
            'error' => $error
        ]);
    }

    #[Route('/deconnexion', name: 'app_logout', methods: ['GET'])]
    public function logout(): never
    {
        throw new \LogicException('Tu as bien mis logout dans ton fichier security.yaml !?!');
    }
}
