<?php

namespace App\Repository;

use App\Entity\UploadFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UploadFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method UploadFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method UploadFile[]    findAll()
 * @method UploadFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UploadFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UploadFile::class);
    }

    // /**
    //  * @return UploadFile[] Returns an array of UploadFile objects
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
    public function findOneBySomeField($value): ?UploadFile
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
