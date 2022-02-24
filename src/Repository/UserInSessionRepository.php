<?php

namespace App\Repository;

use App\Entity\UserInSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserInSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserInSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserInSession[]    findAll()
 * @method UserInSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserInSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserInSession::class);
    }

    // /**
    //  * @return UserInSession[] Returns an array of UserInSession objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserInSession
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
