<?php

namespace App\Controller\Admin;

use App\Entity\Organigramme;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class OrganigrammeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Organigramme::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            DateField::new('date'),
            ImageField::new('fichier')
                ->setUploadDir('public/uploads/files')
                ->setBasePath('uploads/files')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'ASC'])
            ->setPageTitle('index', 'Liste des Organigrammes')
        ;
    }
    
}

