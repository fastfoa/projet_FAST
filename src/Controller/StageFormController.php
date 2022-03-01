<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use App\Form\StageFormType;

class StageFormController extends AbstractController
{
    /**
     * @Route("/stage/form", name="stage_form")
     */
    public function index(): Response
    {
        return $this->render('stage_form/index.html.twig', [
            'controller_name' => 'StageFormController',
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


    public function stageForm(Request $request, ManagerRegistry $doctrine): Response
    {
        $user = new User();
        $form = $this->createForm(StageFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

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
            $nom = strip_tags( $nom );
            $user->setNom($nom);

            // $doctrine = $this->setDoctrine();
            // $entityManager = $doctrine->setManager();
           
            $entityManager->persist($user); 
            // $entityManager->persist($role); 
            $entityManager->flush();

            return $this->redirect($this->generateUrl('login'));
            //return new Response("formulaire OK");
        }

        return $this->render( 'stage_form/stageForm.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
