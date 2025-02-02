<?php

namespace App\Controller\public\informations;

use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PresentationController extends AbstractController
{

    private $presentationRepository;

    public function __construct(PresentationRepository $presentationRepository)
    {
        $this->presentationRepository = $presentationRepository;
    }


    #[Route('/presentation', name: 'app_presentation')]
    public function index(): Response
    {
        $presentation = $this->presentationRepository->findOneBy(['id' => 1]);


        return $this->render('public/informations/presentation/index.html.twig', [
            'presentation' => $presentation
        ]);
    }
}
