<?php

namespace App\Controller\public;

use App\Repository\SectionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private $sectionsRepository;

    public function __construct(SectionsRepository $sectionsRepository)
    {
        $this->sectionsRepository = $sectionsRepository;
    }


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $sections = $this->sectionsRepository->findBy(
            ['isVisible' => true], 
            ['position' => 'ASC']
        );
        return $this->render('public/home/index.html.twig', [
            'sections' => $sections
        ]);
    }
}
