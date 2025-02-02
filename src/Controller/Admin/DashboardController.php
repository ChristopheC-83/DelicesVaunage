<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use App\Entity\Products;
use App\Entity\Sections;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(ProductsCrudController::class)->generateUrl());

        return $this->render('admin/dashboard.html.twig', [
            'title' => 'Bienvenue dans l’administration',
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Délices Vaunage');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-screwdriver-wrench');
        yield MenuItem::linkToCrud('Catégories', 'fa fa-table-list', Sections::class);
        yield MenuItem::linkToCrud('Produits', 'fas fa-cookie-bite', Products::class);
        yield MenuItem::linkToCrud('Présentation (1 seul élément !)', 'fas fa-person-chalkboard', Presentation::class);
        yield MenuItem::linkToUrl('Retour au site', 'fas fa-home', '/');
    }
}
