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
    
    public function inscriptionEleve(Request $request): Response
    {
        $contact = new User();
        $form = $this->createForm(InscriptionAppType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
             //enregistrer le nom 
             $nom = $contact->getNom();
             $nom = strip_tags($nom);
             $contact->setNom($nom);

            //enregistrer le prenom 
            $prenom = $contact->getPrenom();
            $prenom = strip_tags($prenom);
            $contact->setPrenom($prenom);

            //enregistrer le date naissance 
            $date_naissance = $contact->getDateNaissance();
            $contact->setDateNaissance($date_naissance);

            //enregistrer l'adress 
            $adress = $contact->getAdresse();
            $adress = strip_tags($adress);
            $contact->setAdresse($adress);

            //enregistrer le tel 
            $tel = $contact->getTelephone();
            $tel = strip_tags($tel);
            $contact->setTelephone($tel);

            //enregistrer le Diplome 
            $Diplome = $contact->getDiplome();
            $Diplome = strip_tags($Diplome);
            $contact->setDiplome($Diplome);

            //enregistrer le Genre 
            $Genre = $contact->getGenre();
            $Genre = strip_tags($Genre);
            $contact->setDiplome($Genre);

            //enregistrer le Genre 
            $Genre = $contact->getGenre();
            $Genre = strip_tags($Genre);
            $contact->setDiplome($Genre);

            //enregistrer le RepresentantLegal1 
            $RepresentantLegal1 = $contact->getRepresentantLegal1();
            $RepresentantLegal1 = strip_tags($RepresentantLegal1);
            $contact->setRepresentantLegal1($RepresentantLegal1);

            //enregistrer le RepresentantLegal2
            $RepresentantLegal2 = $contact->getRepresentantLegal2();
            $RepresentantLegal2 = strip_tags($RepresentantLegal2);
            $contact->setRepresentantLegal2($RepresentantLegal2);

            //enregistrer le NIR
            $NIR = $contact->getNIR();
            $NIR = strip_tags($NIR);
            $contact->setNIR($NIR);

            //enregistrer le DepNaissance
            $DepNaissance = $contact->getDepNaissance();
            $DepNaissance = strip_tags($DepNaissance);
            $contact->setDepNaissance($DepNaissance);

            //enregistrer le  CommuneNaissance
            $CommuneNaissance = $contact->getCommuneNaissance();
            $CommuneNaissance = strip_tags($CommuneNaissance);
            $contact->setCommuneNaissance($CommuneNaissance);

            //enregistrer le  Nationalite
            $Nationalite = $contact->getNationalite();
            $Nationalite = strip_tags($Nationalite);
            $contact->setNationalite($Nationalite);

            //enregistrer le  RegimeSocial
            $RegimeSocial = $contact->getRegimeSocial();
            $RegimeSocial = strip_tags($RegimeSocial);
            $contact->setRegimeSocial($RegimeSocial);

            //enregistrer le TravailleurHandicape
            $TravailleurHandicape = $contact->getTravailleurHandicape();
            $TravailleurHandicape = strip_tags($TravailleurHandicape);
            $contact->setTravailleurHandicape($TravailleurHandicape);

            //enregistrer le SportifHautNiveau
            $SportifHautNiveau = $contact->getSportifHautNiveau();
            $SportifHautNiveau = strip_tags($SportifHautNiveau);
            $contact->setSportifHautNiveau($SportifHautNiveau);

            //enregistrer le SituationAvantContrat
            $SituationAvantContrat = $contact->getSituationAvantContrat();
            $SituationAvantContrat = strip_tags($SituationAvantContrat);
            $contact->setSituationAvantContrat($SituationAvantContrat);

            //enregistrer le DernierDiplome
            $DernierDiplome = $contact->getDernierDiplome();
            $DernierDiplome = strip_tags($DernierDiplome);
            $contact->setDernierDiplome($DernierDiplome);

            //enregistrer le DernierDiplome
            $DerniereClasse = $contact->getDerniereClasse();
            $DerniereClasse = strip_tags($DerniereClasse);
            $contact->setDerniereClasse($DerniereClasse);

            //enregistrer le DiplomePlusHaut
            $DiplomePlusHaut = $contact->getDiplomePlusHaut();
            $DiplomePlusHaut = strip_tags($DiplomePlusHaut);
            $contact->setDiplomePlusHaut($DiplomePlusHaut);
            
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
            ]
        );
    }
}


//InscriptionEntreprise

//InscriptionApprenti:

//InscriptionMA:
