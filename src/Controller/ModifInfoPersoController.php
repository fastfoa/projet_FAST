<?php

namespace App\Controller;

use App\Form\MonCompteAppType;
use App\Form\MonCompteEntrepriseType;
use App\Form\MonCompteFormateurType;
use App\Form\MonCompteMAType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ModifInfoPersoController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function monCompteAPP(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null; 
        $contact = $this->getUser();
        $form = $this->createForm(MonCompteAppType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $old_pwd = $form->get('old_password')->getData();
            
            if ($encoder->isPasswordValid($contact, $old_pwd)) {
                //enregistrer le nom nouveaux nom
                $new_nom = $form->get('nom')->getData();
                $new_nom = strip_tags($new_nom);
                $contact->setNom($new_nom);
                
                //enregistrer le nom nouveaux prenom
                $new_prenom = $form->get('prenom')->getData();
                $new_prenom = strip_tags($new_prenom);
                $contact->setPrenom($new_prenom);

                //enregistrer la nouvelle adresse
                $new_adresse = $form->get('adresse')->getData();
                $new_adresse = strip_tags($new_adresse);
                $contact->setAdresse($new_adresse);

                

                //enregistrer le nouveaux telephone
                $new_telephone = $form->get('telephone')->getData();
                $new_telephone = strip_tags($new_telephone);
                $contact->setTelephone($new_telephone);


                //enregistrer le nouveaux new_RepresentantLegal1
                $new_RepresentantLegal1 = $form->get('RepresentantLegal1')->getData();
                $new_RepresentantLegal1 = strip_tags($new_RepresentantLegal1);
                $contact->setRepresentantLegal1($new_RepresentantLegal1);

                //enregistrer le nouveaux new_RepresentantLegal2
                $new_RepresentantLegal2 = $form->get('RepresentantLegal2')->getData();
                $new_RepresentantLegal2 = strip_tags($new_RepresentantLegal2);
                $contact->setRepresentantLegal2($new_RepresentantLegal2);

                //enregistrer le nouveaux tavailleurhadicapé
                $new_TravailleurHandicape = $form->get('TravailleurHandicape')->getData();
                $new_TravailleurHandicape = strip_tags($new_TravailleurHandicape);
                $contact->setTravailleurHandicape($new_TravailleurHandicape);

                //enregistrer le nouveaux SportifHautNiveau
                $new_SportifHautNiveau = $form->get('SportifHautNiveau')->getData();
                $new_SportifHautNiveau = strip_tags($new_SportifHautNiveau);
                $contact->setSportifHautNiveau($new_SportifHautNiveau);

                // modification du mot de pass 

                $new_pwd= $form->get('new_password')->getData();
                $password = $encoder->encodePassword($contact, $new_pwd);
                $contact->setPassword($password);

                $entityManager->persist($contact);
                $doctrine = $this->getDoctrine();
                $entityManager = $doctrine->getManager();
                $this->$entityManager->flush();
                $notification = "Vos information ont  été mis à jour.";
            }
        }
        return $this->render('mon_compte/monCompteApp.html.twig',[
            'form' => $form->createView()
        ]);
    }
    public function monCompteEntreprise(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null; 
        $contact = $this->getUser();
        $form = $this->createForm(MonCompteEntrepriseType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $old_pwd = $form->get('old_password')->getData();

            if ($encoder->isPasswordValid($contact, $old_pwd)) {
                //enregistrer le nom nouveaux nom
                $new_nom = $form->get('nom')->getData();
                $new_nom = strip_tags($new_nom);
                $contact->setNom($new_nom);

                //enregistrer la nouvelle adresse
                $new_adresse = $form->get('adresse')->getData();
                $new_adresse = strip_tags($new_adresse);
                $contact->setAdresse($new_adresse);

                //enregistrer le nouveaux telephone
                $new_telephone = $form->get('telephone')->getData();
                $new_telephone = strip_tags($new_telephone);
                $contact->setTelephone($new_telephone);

               

                //enregistrer le nouveaux Effectif
                $new_Effectif = $form->get('Effectif')->getData();
                $new_Effectif = strip_tags($new_Effectif);
                $contact->setEffectif($new_Effectif);

                //enregistrer le nouveaux Public|| Public
                $new_EmployeurPublic = $form->get('EmployeurPublic')->getData();
                $new_EmployeurPublic = strip_tags($new_EmployeurPublic);
                $contact->setEmployeurPublic($new_EmployeurPublic);
                // modification du mot de pass 

                $new_pwd= $form->get('new_password')->getData();
                $password = $encoder->encodePassword($contact, $new_pwd);
                $contact->setPassword($password);

                $entityManager->persist($contact);

                $doctrine = $this->getDoctrine();
                $entityManager = $doctrine->getManager();
                $this->$entityManager->flush();
                $notification = "Vos information ont  été mis à jour.";
            }
        }
        return $this->render('mon_compte/monCompteEntreprise.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function monCompteMA(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null; 
        $contact = $this->getUser();
        $form = $this->createForm(MonCompteMAType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {

            //enregistrer la nouvelle adresse
            $new_adresse = $form->get('adresse')->getData();
            $new_adresse = strip_tags($new_adresse);
            $contact->setAdresse($new_adresse);
            
            //enregistrer le nom nouveaux prenom
            $new_prenom = $form->get('prenom')->getData();
            $new_prenom = strip_tags($new_prenom);
            $contact->setPrenom($new_prenom);

            //enregistrer le nouveaux telephone
            $new_telephone = $form->get('telephone')->getData();
            $new_telephone = strip_tags($new_telephone);
            $contact->setTelephone($new_telephone);

            //enregistrer le nom nouveaux nom
            $new_nom = $form->get('nom')->getData();
            $new_nom = strip_tags($new_nom);
            $contact->setNom($new_nom);


            // modification du mot de pass 

            $new_pwd= $form->get('new_password')->getData();
            $password = $encoder->encodePassword($contact, $new_pwd);
            $contact->setPassword($password);

            $entityManager->persist($contact);
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $this->$entityManager->flush();
            $notification = "Votre mot de passe a bien été mis à jour.";
        }
        return $this->render('mon_compte/monCompteMA.html.twig',[
            'form' => $form->createView()
        ]);
    }
    public function monCompteFormateur(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $contact = $this->getUser();
        $form = $this->createForm(MonCompteFormateurType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {


            //enregistrer la nouvelle adresse
            $new_adresse = $form->get('adresse')->getData();
            $new_adresse = strip_tags($new_adresse);
            $contact->setAdresse($new_adresse);

            //enregistrer le nouveaux telephone
            $new_telephone = $form->get('telephone')->getData();
            $new_telephone = strip_tags($new_telephone);
            $contact->setTelephone($new_telephone);

            //enregistrer le nom nouveaux nom
            $new_nom = $form->get('nom')->getData();
            $new_nom = strip_tags($new_nom);
            $contact->setNom($new_nom);




            // modification du mot de pass 

            $new_pwd= $form->get('new_password')->getData();
            $password = $encoder->encodePassword($contact, $new_pwd);
            $contact->setPassword($password);

            $entityManager->persist($contact);
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $this->$entityManager->flush();
            $notification = "Votre mot de passe a bien été mis à jour.";
        }
        return $this->render('mon_compte/monCompteFormateur.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
