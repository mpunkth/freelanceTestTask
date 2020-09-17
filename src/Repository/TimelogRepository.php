<?php

namespace App\Repository;

use App\Entity\Timelog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Timelog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Timelog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Timelog[]    findAll()
 * @method Timelog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimelogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Timelog::class);
    }

    // /**
    //  * @return Timelog[] Returns an array of Timelog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Timelog
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
