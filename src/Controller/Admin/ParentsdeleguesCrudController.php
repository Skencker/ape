<?php

namespace App\Controller\Admin;

use App\Entity\Parentsdelegues;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ParentsdeleguesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Parentsdelegues::class;
    }

    public function configureFields(string $pageName): iterable
    {
             return [
            TextField::new('name'),
            TextField::new('firstname'),
            ImageField::new('image')
                ->setUploadDir('public/uploads/images')
                ->setBasePath('uploads/images')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            AssociationField::new('fonction'),
            AssociationField::new('classe')
            
      
        ];
    }
    
}
