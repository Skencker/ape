<?php

namespace App\Controller\Admin;

use App\Entity\ImagesDiapo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ImagesDiapoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImagesDiapo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('fichier')
                ->setUploadDir('public/uploads/images')
                ->setBasePath('uploads/images')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
        ];
    }
}
