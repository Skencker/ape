<?php

namespace App\Controller\Admin;

use App\Entity\ConseilsEcole;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConseilsEcoleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConseilsEcole::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'ASC'])
            ->setPageTitle('index', 'Liste des Conseils d\'écoles')
        ;
    }
}
