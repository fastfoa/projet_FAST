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
use App\Lib\PDOUtil;

use App\Entity\User;
use App\Entity\Session;

use App\Form\FormateurType;
//use App\Form\RGPDType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;




class LanController extends AbstractController
{
    /**
     * @Route("/lan", name="lan")
     */
    public function index(): Response
    {
        return $this->render('lan/index.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    function checkRGPD()
    {
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }


    /*
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
*/
    public function test(): Response
    {
        return $this->render('test.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }

    public function aide(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
        return $this->render('lan/aide.html.twig');
    }

    public function documentOff(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
        return $this->render('lan/documentOff.html.twig');
    }

    // **************************************************************

    public function annuaireTest(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->render('lan/annuaireTest.html.twig');
    }

    public function annuairePopup($listApp): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->render('lan/annuairePopup.html.twig', 
        [
            'app' => $listApp,       
        ]);
    }

    public function annuaire(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            

        $listApp = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        'SELECT prenom, role_string from user'                                            );
        // return  new JsonResponse(   $users    );
    
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
    
        $users = getSQLArrayKV( $login, $pw, 'SELECT nom as v, id as k FROM  user' );
        return  new JsonResponse(   $users    );
    }

    public function annuaireR($role): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
                
        $users = getSQLArrayKV( $login, $pw, "SELECT user.nom as v, user.id as k, user.role_string, s.id_session FROM  user_in_session as s LEFT JOIN user ON s.id_user=user.id Where user.role_string='$role'");
        return  new JsonResponse(   $users    );
    }

    public function annuaireRS($role, $session): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
                
        $users = getSQLArrayKV( $login, $pw, "SELECT user.nom as v, user.id as k, user.role_string, s.id_session FROM  user_in_session as s LEFT JOIN user ON s.id_user=user.id Where s.id_session=$session and user.role_string='$role'");
        return  new JsonResponse(   $users    );
    }
}
