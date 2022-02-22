<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;
use ContainerT2hE2KD\getDoctrine_QueryDqlCommandService;
//use App\Lib\PDO;
use PDO;

use App\Entity\User;
use App\Entity\Session;

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
        return $this->render('base.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

     public function login(): Response
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardStudent(): Response
    {
        return $this->render('DashboardApprenti.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardSchool(): Response
    {
        return $this->render('dashBoardSchool.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardSkill(): Response
    {
        return $this->render('dashBoardSkill.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function files(): Response
    {
        return $this->render('Files.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function dashBoardEntrprise(): Response
    {
        return $this->render('dashBoardEntrprise.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function formulaireEleve(): Response
    {
        return $this->render('formulaireEleve.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function formulaireG(): Response
    {
        return $this->render('formulaireG.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }


    public function dash(): Response
    {
        return $this->render('dash.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function suiviCompetences(): Response
    {
        return $this->render('suiviCompetences.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function getSkillToBe(): Response
    {
        return $this->render('getSkillToBe.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function followCompany(): Response
    {
        return $this->render('followCompany.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }


    public function followTraining(): Response
    {
        return $this->render('followTraining.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function test(): Response
    {
        return $this->render('test.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function aide(): Response
    {
        return $this->render('aide.html.twig');
    }

    public function documentOff(): Response
    {
        return $this->render('documentOff.html.twig');
    }

    public function annuaire(): Response
    {
        return $this->render('lan/annuaire.html.twig');
    }

    public function annuaireR($role): Response
    {
        return $this->render('lan/annuaire.html.twig');
    }

    public function annuaireRS($role, Session $session): Response
    {
        return $this->render('lan/annuaire.html.twig');
    }

    public function annuaireData(): Response
    {
        return  new Response( 'hello'  );

        $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
        try {
            $pdo = new PDO($dsn, 'xxx', 'xxx');
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        $rs = $pdo->prepare('SELECT nom FROM  user');
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_NUM)) {
            $res[] = $ligne[0];
        }
        
        //$user = getSQLArray( 'SELECT nom FROM  user' );    
        return  new JsonResponse(   $res    );
    }

    public function annuaireDataRepository( UserRepository $userRepository ): Response
    {
        //OK en DQL
        $user = $userRepository->annuaireDataNative( 'MODE_APP' );
        return  new JsonResponse(   $user    );
    }
}
