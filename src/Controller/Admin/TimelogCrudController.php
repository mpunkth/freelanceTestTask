<?php

namespace App\Controller\Admin;

use App\Entity\Timelog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TimelogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Timelog::class;
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
}
