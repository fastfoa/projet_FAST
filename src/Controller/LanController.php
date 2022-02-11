<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Form\StageFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

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

    public function stageForm(Request $request, ManagerRegistry $doctrine): Response
    {
        $user = new User();
        $form = $this->createForm(StageFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

            // $role->setRole(Role::class, 'ROLE_MAITRE');

            $user->setRoles(['ROLE_MAITRE']);

            $mail = $user->getEmail();
            $user->setEmail($mail);

            $pw = $user->getPassword();
            $user->setPassword($pw);
            
            $prenom = $user->getPrenom();
            $user->setPrenom($prenom);

            $dateNaissance = $user->getDateNaissance();
            $user->setDateNaissance($dateNaissance);

            $tel = $user->getTelephone();
            $user->setTelephone($tel);

            $nom = $user->getNom();
            //$nom = strip_tags( $nom );
            $user->setNom($nom);

            // $doctrine = $this->setDoctrine();
            // $entityManager = $doctrine->setManager();
           
            $entityManager->persist($user); 
            // $entityManager->persist($role); 
            $entityManager->flush();

            return new Response("formulaire OK");
        }

        return $this->render( 'lan/stageForm.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
