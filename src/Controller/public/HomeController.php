<?php

namespace App\Controller\public;

use App\Repository\SectionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private $sectionRepository;

    public function __construct(SectionsRepository $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $sections = $this->sectionRepository->findAll();

        return $this->render('public/home/index.html.twig', [
            'sections' => $sections
        ]);
    }
}
