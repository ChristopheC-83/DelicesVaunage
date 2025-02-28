<?php

namespace App\Service;

use App\Repository\SectionsRepository;

class SectionsService
{
    private SectionsRepository $sectionsRepository;

    public function __construct(SectionsRepository $sectionsRepository)
    {
        $this->sectionsRepository = $sectionsRepository;
    }

    public function getCategories(): array
    {

        $sections = $this->sectionsRepository->findAll();
        return $sections;
        // return $this->sectionsRepository->findAll();
    }
}
