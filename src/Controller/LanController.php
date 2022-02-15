<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionAppType;

use App\Form\InscriptionEntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    public function inscriptionEleve(Request $request): Response
    {
        $contact = new User();
        $form = $this->createForm(InscriptionAppType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $contact->getEmail();
            $mail = strip_tags( $mail );
            $contact->setEmail( $mail );

            //enregistrer le mail 
            $pw = $contact->getPassword();
            $pw = strip_tags( $pw );
            $contact->setPassword( $pw );

            //enregistrer le prenom 
            $prenom = $contact->getPrenom();
            $prenom = strip_tags( $prenom );
            $contact->setPrenom( $prenom );

            //enregistrer le date naissance 
            $date_naissance = $contact->getDateNaissance();
            $contact->setDateNaissance( $date_naissance );
            
            //enregistrer le date adress 
            $adress = $contact->getAdresse();
            $adress = strip_tags( $adress );
            $contact->setAdresse( $adress );

            //enregistrer le date tel 
            $tel = $contact->getTelephone();
            $tel = strip_tags( $tel );
            $contact->setTelephone( $tel );

            //enregistrer nom
            $nom = $contact->getNom();
            $nom = strip_tags( $nom );
            $contact->setNom( $nom );

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
           
            $entityManager->persist($contact); 
            $entityManager->flush();
            return $this->redirect($this->generateUrl('login'));
         }
        return $this->render(
            'lan/inscriptionEleve.html.twig', 
            [
                'form' => $form->createView()
            ]);
        
    }

    public function inscriptionEntreprise(Request $request): Response
    {
        $contact = new User();
        $form = $this->createForm(InscriptionEntrepriseType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $contact->getEmail();
            $mail = strip_tags( $mail );
            $contact->setEmail( $mail );

            //enregistrer le pw 
            $pw = $contact->getPassword();
            $pw = strip_tags( $pw );
            $contact->setPassword( $pw );

            //enregistrer le adress 
            $adress = $contact->getAdresse();
            $adress = strip_tags( $adress );
            $contact->setAdresse( $adress );

            //enregistrer le adress 
            $tel = $contact->getTelephone();
            $tel = strip_tags( $tel );
            $contact->setTelephone( $tel );

            //enregistrer le adress 
            $siret = $contact->getSiret();
            $siret = strip_tags( $siret );
            $contact->setSiret( $siret );
            
            //enregistrer contact
            $nom = $contact->getNom();
            $nom = strip_tags( $nom );
            $contact->setNom( $nom );

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
           
            $entityManager->persist($contact); 
            $entityManager->flush();
            return $this->redirect($this->generateUrl('login'));
         }
        return $this->render(
            'lan/inscriptionEntreprise.html.twig', 
            [
                'form' => $form->createView()
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
}
