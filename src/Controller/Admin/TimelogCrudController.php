<?php

namespace App\Controller\Admin;

use App\Entity\Timelog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TimelogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Timelog::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('TimeStart'),
            DateTimeField::new('TimeStop'),
            TextField::new('HoursSpent'),
            TextField::new('Task'),
            TextField::new('Customer')
        ];
    }

}
