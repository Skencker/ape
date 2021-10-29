<?php

namespace App\Controller\Admin;

use App\Entity\ConseilsEcole;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ConseilsEcoleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConseilsEcole::class;
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
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'ASC'])
            ->setPageTitle('index', 'Liste des Conseils d\'écoles')
        ;
    }
}
