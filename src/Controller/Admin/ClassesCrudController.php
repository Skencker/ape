<?php

namespace App\Controller\Admin;

use App\Entity\Classes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ClassesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Classes::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('date'),
            ImageField::new('fichier')
                ->setUploadDir('public/uploads/files')
                ->setBasePath('uploads/files')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
        ];
    }
}
