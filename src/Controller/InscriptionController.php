<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEntrepriseType;
use App\Entity\User;


class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(): Response
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }

    public function InscriptionEntreprise( Request $request ): Response
    {
        $user = new User();
        $form = $this->createForm( InscriptionEntrepriseType::class, $user );

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            //enregistrer le mail 
            $mail = $user->getEmail();
            $mail = strip_tags( $mail );
            $user->setEmail( $mail );

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
           
            $entityManager->persist($user); 
            $entityManager->flush();
            return $this->redirect($this->generateUrl('login'));
        }
        return $this->render('inscription/inscriptionEntreprise.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}


//InscriptionEntreprise

//InscriptionApprenti:

//InscriptionMA:
