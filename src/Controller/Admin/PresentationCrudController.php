<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PresentationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Presentation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Présentation')
            ->setEntityLabelInPlural('Présentations')

        ;
    }
    public function configureFields(string $pageName): iterable
    {

        $required = true;

        if ($pageName == 'edit') {
            $required = false;
        }


        return [
            TextField::new('title')->setLabel('Titre')->setHelp('Titre/nom du lien'),

            TextEditorField::new('Text')->setLabel('Premier texte de la présentation'),
            ImageField::new('banniere')
                ->setLabel('banniere')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setRequired($required)
                ->setHelp('banniere obligatoire de la presentation'),
            ImageField::new('photo1')
                ->setLabel('photo1')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setHelp('image1 slider/caroussel'),
            ImageField::new('photo2')
                ->setLabel('photo2')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setHelp('image2 slider/caroussel'),
            ImageField::new('photo3')
                ->setLabel('photo3')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setHelp('image3 slider/caroussel'),
            ImageField::new('photo4')
                ->setLabel('photo4')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setHelp('image4 slider/caroussel'),
            ImageField::new('photo5')
                ->setLabel('photo5')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/presentation')
                ->setBasePath('images/presentation')
                ->setHelp('image5 slider/caroussel'),
            TextEditorField::new('Text2')->setLabel('Second texte de la présentation'),
        ];
    }
}
