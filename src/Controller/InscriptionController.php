<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEntrepriseType;
use App\Form\inscriptioFormateurType;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;




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

    public function InscriptionEntreprise(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(InscriptionEntrepriseType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $user->getEmail();
            $mail = strip_tags($mail);
            $user->setEmail($mail);

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


    public function inscriptionFormateur(Request $request, EntityManagerInterface $manager)
    {
        $contact = new User();
        $form = $this->createForm(inscriptioFormateurType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $contact->getEmail();
            $mail = strip_tags($mail);
            $contact->setEmail($mail);

            //enregistrer le genre 
            $genre = $contact->getGenre();
            $genre = strip_tags($genre);
            $contact->setGenre($genre);

            //enregistrer le adress 
            $adress = $contact->getAdresse();
            $adress = strip_tags($adress);
            $contact->setAdresse($adress);

            //enregistrer le adress 
            $tel = $contact->getTelephone();
            $tel = strip_tags($tel);
            $contact->setTelephone($tel);

            //enregistrer le adress 
            $siret = $contact->getSiret();
            $siret = strip_tags($siret);
            $contact->setSiret($siret);

            //enregistrer contact
            $nom = $contact->getNom();
            $nom = strip_tags($nom);
            $contact->setNom($nom);

            //enregistrer prenom
            $prenom = $contact->getPrenom();
            $prenom = strip_tags($prenom);
            $contact->setPrenom($prenom);



            //enregistrer diplome
            $diplome = $contact->getDiplome();
            $diplome = strip_tags($diplome);
            $contact->setDiplome($diplome);

            //enregistrer le date naissance 
            $date_naissance = $contact->getDateNaissance();
            $contact->setDateNaissance($date_naissance);

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($contact);
            $entityManager->flush();
            return $this->redirect($this->generateUrl('login'));
        }
        return $this->render(
            'lan/inscriptionFormateurs.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}

//InscriptionEntreprise

//InscriptionApprenti:

//InscriptionMA:
