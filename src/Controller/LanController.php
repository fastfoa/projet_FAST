<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;
use ContainerT2hE2KD\getDoctrine_QueryDqlCommandService;
use PDO;

use App\Form\FormateurType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;




class LanController extends AbstractController
{
    /**
     * @Route("/lan", name="lan")
     */
    public function index(): Response
    {
        return $this->render('lan/base.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

     public function login(): Response
    {
        return $this->render('lan/login.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardStudent(): Response
    {
        return $this->render('lan/DashboardApprenti.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardSchool(): Response
    {
        return $this->render('lan/dashBoardSchool.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardSkill(): Response
    {
        return $this->render('lan/dashBoardSkill.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function files(): Response
    {
        return $this->render('lan/Files.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardEntrprise(): Response
    {
        return $this->render('lan/dashBoardEntrprise.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function formulaireEleve(): Response
    {
        return $this->render('lan/formulaireEleve.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function formulaireG(): Response
    {
        return $this->render('lan/formulaireG.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }


    public function dash(): Response
    {
        return $this->render('lan/dash.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function suiviCompetences(): Response
    {
        return $this->render('lan/suiviCompetences.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function getSkillToBe(): Response
    {
        return $this->render('lan/getSkillToBe.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function followCompany(): Response
    {
        return $this->render('lan/followCompany.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }


    public function followTraining(): Response
    {
        return $this->render('lan/followTraining.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function test(): Response
    {
        return $this->render('lan/test.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function aide(): Response
    {
        return $this->render('lan/aide.html.twig');
    }

    public function documentOff(): Response
    {
        return $this->render('lan/documentOff.html.twig');
    }

    public function annuaire(): Response
    {
        return $this->render('lan/annuaire.html.twig');
    }

    public function annuaireDataPDO(): Response
    {
        //https://www.doctrine-project.org/projects/doctrine-orm/en/2.9/reference/native-sql.html
        $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
        try {
             $pdo = new PDO($dsn, 'xxx', 'xxx');
        } catch (\PDOException $e) 
        {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        $rs = $pdo->prepare('SELECT nom FROM  user where roles=JSON({"ROLE_APP"}) '   );
        $rs = $pdo->prepare('SELECT nom FROM  user' );
        $rs->execute();
        $user=[];
        while(   $ligne = $rs->fetch(PDO::FETCH_ASSOC) )
        {
            if ( $ligne[  'nom' ] != null)
                $user[] = $ligne[  'nom' ];
        }

        //return  new Response(  json_encode( $user )   );
        return  new JsonResponse(   $user    );
    }


    
    //annuaireDatar()
    public function annuaireDataRepoNativSQL( UserRepository $userRepository )
    {
        /*
        //$em  = $em->getEntityManager();
        $rsm = new ResultSetMapping();
        $query = $em->createNativeQuery('SELECT u.nom FROM user u where nom <> ?', $rsm);
        $query->setParameter(1,  'jm' );
                
        $users =  $query->getResult();;
        return  new JsonResponse(   $users    );
        */
    }

    public function annuaireDataRepoTest( UserRepository $userRepository ): Response
    {
        //ManagerRegistry $doctrine
        //$doctrine = $this->getDoctrine();

        //$products = $registry->getRepository(Product::class)->annuaireDatar();
        //$entityManager = $registry->getManager();

        //$sm =new ServiceEntityRepository( $registry, User::class );
        //$entityManager = $sm->getEntityManager();

        //$this->getDoctrine()->getRepository();

        $user = $userRepository->annuaireData( 'MODE_APP' );
        return  new JsonResponse(   $user    );

        /*
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM product p
            WHERE p.price > :price
            ORDER BY p.price ASC
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['price' => $price]);
        */
        // returns an array of arrays (i.e. a raw data set)
        //return $resultSet->fetchAllAssociative()

        // returns an array of Product objects
        //return $query->getResult();
    }

    public function annuaireDataConnection( Connection $connection ): Response
    {
        $users = $connection->fetchAll('SELECT * FROM users');

        // ...
    }



    //public function annuaireDataRepoRegistry( ManagerRegistry $registry ): Response
    public function annuaireData( ManagerRegistry $registry ): Response
    {
        //$userRepository = $registry->getRepository(User::class);
        //$user = $userRepository->annuaireData();
        //$em = $registry->getManager();

        //$sm =new ServiceEntityRepository( $registry, User::class );
        //$em = $sm->getEntityManager();

        //$this->getDoctrine()->getRepository();

        //$user = $userRepository->annuaireData( 'MODE_APP' );
        //return  new JsonResponse(   $user    );

        $conn = $em->getConnection();

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
        return  new JsonResponse(   $resultSet    );
    }

    //annuaireDatar()
    public function annuaireDataRepository( UserRepository $userRepository ): Response
    {
        //OK en DQL
        $user = $userRepository->annuaireDataNative( 'MODE_APP' );
        return  new JsonResponse(   $user    );
    }






}
