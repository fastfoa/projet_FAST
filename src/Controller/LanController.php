<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    public function inscriptionEleve(): Response
    {
        return $this->render('lan/inscriptionEleve.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }
    public function login(): Response
    {
        return $this->render('lan/login.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }
    /*
public function registerStudent(): Response
{
    return $this->render('lan/registerStudent.html.twig', [
        'controller_name' => 'LanController',
    ]);
}
*/
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
public function tableauSuiviCompetences(): Response
{
    return $this->render('lan/tableauSuiviCompetences.html.twig', [
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

    public function formations(): Response
    {
        return $this->render('lan/test.html.twig', [
            'controller_name' => 'LanController',
        ]);
    }
}
