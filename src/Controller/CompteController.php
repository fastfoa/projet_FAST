<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\MonCompteADMINType;
use App\Form\MonCompteAppType;
use App\Form\MonCompteEntrepriseType;
use App\Form\MonCompteFormateurType;
use App\Form\MonCompteINDType;
use App\Form\MonCompteMAType;
use App\Form\MonCompteOFType;

class CompteController extends AbstractController
{
    function checkRGPD()
    {
    //dd( $t );

        $user = $this->getUser();
        if ( $user != null )
        {
            $rgpd = $this->getUser()->getRGPDOK();
            if (!$rgpd)
                return $this->redirectToRoute( "rgpdForm" );
        }
        return null;
    }

    public function monCompte(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
        
        $user = $this->getUser();
       
        return $this->render('compte/compte.html.twig',
    [
        'user' => $user
    ]);
    }

    public function modifInfoMonCompte(Request $request ): Response
    {
        $ret = $this->checkRGPD();
        if ($ret) {
            return $ret;
        }

        $notification = null;
        $contact = $this->getUser();

        $role = $contact->getRoleString();

        //dd( $role );
        $type =  null;
        $twig = '';


        if ($role == 'ROLE_APP') {
            $type =  MonCompteAppType::class;
            $twig = 'compte/mon_compte/monCompteApp.html.twig';
            $titre = "Apprenti";
        } elseif ($role == 'ROLE_MA') {
            $type =  MonCompteMAType::class;
            $twig = 'compte/mon_compte/monCompteMA.html.twig';
            $titre = "Maitre d'Apprentissage";
        } elseif ($role == 'ROLE_ENT') {
            $type =  MonCompteEntrepriseType::class;
            $twig = 'compte/mon_compte/monCompteEntreprise.html.twig';
            $titre = "Entreprise";
        } elseif ($role == 'ROLE_FORMATEUR') {
            $type =  MonCompteFormateurType::class;
            $twig = 'compte/mon_compte/monCompteFormateur.html.twig';
            $titre = "Formateur";
        } elseif ($role == 'ROLE_OF') {
            $type =  MonCompteOFType::class;
            $twig = 'compte/mon_compte/monCompteOF.html.twig';
            $titre = "Organisme de Formation";
        } elseif ($role == 'ROLE_IND') {
            $type =  MonCompteINDType::class;
            $twig = 'compte/mon_compte/monCompteIND.html.twig';
            $titre = "Formateur";
        } elseif ($role == 'ROLE_ADMIN') {
            $type =  MonCompteADMINType::class;
            $twig = 'compte/mon_compte/monCompteADMIN.html.twig';
            $titre = "Formateur";
        }

        $form = $this->createForm($type, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($contact); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)
            $entityManager->flush();
            return $this->redirectToRoute('compte');
        }
        
        return $this->render($twig, [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
