<?php

namespace App\Repository;

use App\Entity\ComboNomSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ComboNomSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComboNomSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComboNomSession[]    findAll()
 * @method ComboNomSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComboNomSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComboNomSession::class);
    }

    // /**
    //  * @return ComboNomSession[] Returns an array of ComboNomSession objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ComboNomSession
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
