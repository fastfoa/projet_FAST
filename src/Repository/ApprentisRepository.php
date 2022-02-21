<?php

namespace App\Repository;

use App\Entity\Apprentis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apprentis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apprentis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apprentis[]    findAll()
 * @method Apprentis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApprentisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apprentis::class);
    }

    // /**
    //  * @return Apprentis[] Returns an array of Apprentis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apprentis
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
