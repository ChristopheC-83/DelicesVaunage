<?php

namespace App\EventSubscriber;

use App\Repository\SectionsRepository;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Twig\Environment;

class GlobalVariablesSubscriber implements EventSubscriberInterface
{
    private Environment $twig;
    private SectionsRepository $sectionsRepository;

    public function __construct(Environment $twig, SectionsRepository $sectionsRepository)
    {
        $this->twig = $twig;
        $this->sectionsRepository = $sectionsRepository;
    }

    public function onControllerEvent(ControllerEvent $event): void
    {
        // Récupère les catégories
        $sections = $this->sectionsRepository->findAll();

        // Ajoute les catégories comme variable globale Twig
        $this->twig->addGlobal('sections', $sections);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ControllerEvent::class => 'onControllerEvent',
        ];
    }
}
