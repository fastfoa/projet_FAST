<?php

namespace App\Repository;

use App\Entity\AppHasMA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppHasMA|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppHasMA|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppHasMA[]    findAll()
 * @method AppHasMA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppHasMARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppHasMA::class);
    }

    // /**
    //  * @return AppHasMA[] Returns an array of AppHasMA objects
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
    public function findOneBySomeField($value): ?AppHasMA
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
