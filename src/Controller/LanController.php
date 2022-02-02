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

public function registerStudent(): Response
{
    return $this->render('lan/registerStudent.html.twig', [
        'controller_name' => 'LanController',
    ]);
}

public function dashBoardStudent(): Response
{
    return $this->render('lan/dashBoardStudent.html.twig', [
        'controller_name' => 'LanController',
    ]);
}

public function dashBoardSchool(): Response
{
    return $this->render('lan/dashBoardSchool.html.twig', [
        'controller_name' => 'LanController',
    ]);
}



}
