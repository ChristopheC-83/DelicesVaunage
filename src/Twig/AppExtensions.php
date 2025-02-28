<?php

namespace App\Twig;

use App\Service\SectionsService;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtensions extends AbstractExtension implements GlobalsInterface
{
    private SectionsService $sectionsService;

    public function __construct(SectionsService $sectionsService)
    {
        $this->sectionsService = $sectionsService;
    }

    public function getGlobals(): array
    {
        return [
            'sections' => $this->sectionsService->getCategories(),
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_categories', [$this, 'getCategories']),
        ];
    }

    public function formatPrice($number)
    {
        $euros = $number / 100;
        return number_format($euros, 2, ',', ' ') . ' €';
    }

    public function getCategories(): array
    {
        return $this->sectionsService->getCategories();
    }
}
