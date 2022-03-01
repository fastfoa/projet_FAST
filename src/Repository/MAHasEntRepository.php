<?php

namespace App\Repository;

use App\Entity\MAHasEnt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MAHasEnt|null find($id, $lockMode = null, $lockVersion = null)
 * @method MAHasEnt|null findOneBy(array $criteria, array $orderBy = null)
 * @method MAHasEnt[]    findAll()
 * @method MAHasEnt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MAHasEntRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MAHasEnt::class);
    }

    // /**
    //  * @return MAHasEnt[] Returns an array of MAHasEnt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MAHasEnt
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
