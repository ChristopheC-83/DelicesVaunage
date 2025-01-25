<?php

namespace App\Controller\Admin;

use App\Entity\Sections;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SectionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sections::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Catégorie')
            ->setEntityLabelInPlural('Catégories')

        ;
    }

    public function configureFields(string $pageName): iterable
    {

        $required = true;

        if ($pageName == 'edit') {
            $required = false;
        }


        return [
            TextField::new('name')->setLabel('Titre')->setHelp('Titre de la catégorie'),
            SlugField::new('slug')->setLabel('URL')->setTargetFieldName('name')->hideOnIndex()->setHelp('URL de la catégorie généré automatiquement !'),
            NumberField::new('position')->setLabel('position')->setHelp('position dans l\'ordre d\'apparition sur la page d\'accueil'),
            
            TextEditorField::new('description')->setLabel('Description')->setHelp('Description de la catégorie'),
            ImageField::new('banniere')
                ->setLabel('banniere')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/categories')
                ->setBasePath('uploads/categories')
                ->setRequired(false)
                ->setHelp('Banniere sur la page dédiée'),
                ImageField::new('image_1')
                ->setLabel('image 1')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/categories')
                ->setBasePath('uploads/categories')
                ->setRequired($required)
                ->setHelp('image1 de la catégorie'),
            ImageField::new('image_2')
                ->setLabel('image 2')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/categories')
                ->setBasePath('uploads/categories')
                ->setRequired(false)
                ->setHelp('image2 de la catégorie'),
            ImageField::new('image_3')
                ->setLabel('image 3')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/categories')
                ->setBasePath('uploads/categories')
                ->setRequired(false)
                ->setHelp('image3 de la catégorie'),
        ];
    }
}
