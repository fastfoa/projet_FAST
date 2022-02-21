<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\MyString;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }
   
    public function annuaireDataDQL( $role ): array
    {
        //$conn = $this->getEntityManager()->getConnection();


        $em  = $this->getEntityManager();
        $query = $em->createQuery(
            "SELECT u.nom, u.prenom
            FROM App\Entity\User u"
        ); //->setParameter('price', $price);
        $query->execute();
        return $query->getResult();;
    }

    public function annuaireDataNative( $role ): array
    {
        //$conn = $this->getEntityManager()->getConnection();

        $em  = $this->getEntityManager();
        $rsm = new ResultSetMapping();
        $query = $em->createNativeQuery('SELECT u.nom FROM user u', $rsm);
        //$query->setParameter(1,  'jm' );
                
        return $query->getResult();
    }

    public function annuaireDataSQL( $role ): array
    {
        $conn = $this->getConnection();

        $sql = '
            SELECT nom FROM user u
            WHERE p.price > :price
            ORDER BY p.price ASC
            ';
        $sql = '
            SELECT nom FROM user u';

        $stmt = $conn->prepare($sql);

        //$resultSet = $stmt->executeQuery(['price' => $price]);
        $resultSet = $stmt->executeQuery();
        return  $resultSet;
    }

    // /**
    //  * @return User[] Returns an array of User objects
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
    public function findOneBySomeField($value): ?User
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
