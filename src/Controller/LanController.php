<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\RGPDType;

use Doctrine\ORM\EntityManagerInterface;

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



}