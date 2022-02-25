<?php

namespace App\Repository;

use App\Entity\RecipientDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecipientDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipientDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipientDocument[]    findAll()
 * @method RecipientDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipientDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipientDocument::class);
    }

    // /**
    //  * @return RecipientDocument[] Returns an array of RecipientDocument objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecipientDocument
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
