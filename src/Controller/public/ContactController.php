<?php

namespace App\Controller\public;

use App\Classe\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $formData = $request->request->all();

        // Vérifier si le formulaire a été soumis
        if ($request->isMethod('POST')) {

            $mail = new Mail();

            $vars = [
                'pseudo' => $formData['_pseudo'],
                'email' => $formData['_email'],
                'tel' => $formData['_tel'],
                'message' => $formData['_message'],
            ];

            $mail->send('contact@delices-vaunage.fr', 'Alicia & Kevin', 'Contact du site', 6723649,  $vars);


            $this->addFlash('success', 'Message envoyé !');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('public/contact/index.html.twig', []);
    }
}
