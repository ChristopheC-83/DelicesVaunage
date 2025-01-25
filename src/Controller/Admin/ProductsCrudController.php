<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Produit')
            ->setEntityLabelInPlural('Produits')
            // ...
        ;
    }

    public function configureFields(string $pageName): iterable
    {

        $required = true;

        if ($pageName == 'edit') {
            $required = false;
        }
        return [
            AssociationField::new('section')->setHelp('Catégorie du produit'),
            TextField::new('name')->setLabel('Nom')->setHelp('Nom du produit'),
            NumberField::new('price')->setLabel('prix')->setHelp('prix du produit sans le sigle€'),
            TextEditorField::new('description')->setLabel('description')->setHelp('description du produit'),
            BooleanField::new('isVisible')->setLabel('visible')->setHelp('produit visible sur le site'),
            NumberField::new('position')->setLabel('position')->setHelp('position du produit dans la catégorie'),
            ImageField::new('image')
                ->setLabel('image')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setUploadDir('/public/images/products')
                ->setBasePath('images/products')
                ->setRequired($required)
                ->setHelp('image du produit'),

        ];
    }
}
