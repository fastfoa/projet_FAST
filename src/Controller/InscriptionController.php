<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEntrepriseType;
use App\Form\InscriptionMAType;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;


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

    public function InscriptionMA(Request $request, ManagerRegistry $doctrine): Response
    {
        $user = new User();
        $form = $this->createForm(InscriptionMAType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

            $user->setRoles(['ROLE_MA']);

            $email = $user->getEmail();
            $user->setEmail($email);

            $adresse = $user->getAdresse();
            $user->setAdresse($adresse);
            
            $prenom = $user->getPrenom();
            $user->setPrenom($prenom);

            $dateNaissance = $user->getDateNaissance();
            $user->setDateNaissance($dateNaissance);

            $tel = $user->getTelephone();
            $user->setTelephone($tel);

            $nom = $user->getNom();
            $nom = strip_tags( $nom );
            $user->setNom($nom);

            $entityManager->persist($user); 
            $entityManager->flush();

            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render( 'inscription/inscriptionMA.html.twig', [
            'form' => $form->createView()
        ]);
    }
}