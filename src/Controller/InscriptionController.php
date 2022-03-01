<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEntrepriseType;
use App\Form\InscriptioFormateurType;
use App\Entity\User;
use App\Entity\Session;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\AddUserType;
use App\Form\InscriptionAppType;
use App\Form\InscriptionApprentiType;
use App\Form\InscriptionIndType;
use App\Form\InscriptionApp2Type;
use App\Form\InscriptionMAType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
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

    function checkRGPD()
    {
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }


    public function inscriptionEntreprise(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = new User();

        //$user->setNom( 'toto');
        $form = $this->createForm(InscriptionEntrepriseType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            //enregistrer le Nom 
            $raisonSocial = $user->getRaisonSocial();
            $user->setRaisonSocial($raisonSocial);

            //enregistrer l'Adresse 
            $Adresse = $user->getAdresse();
            $Adresse = strip_tags( $Adresse );
            $user->setAdresse( $Adresse );

            //enregistrer le Telephone 
            $Telephone = $user->getTelephone();
            $Telephone = strip_tags( $Telephone );
            $user->setTelephone( $Telephone );

            //enregistrer le Siret 
            $Siret = $user->getSiret();
            $Siret = strip_tags( $Siret );
            $user->setSiret( $Siret );

            //enregistrer le NAF 
            $NAF = $user->getNAF();
            $NAF = strip_tags( $NAF );
            $user->setNAF( $NAF );

            //enregistrer le Effectif 
            $Effectif = $user->getEffectif();
            $Effectif = strip_tags( $Effectif );
            $user->setEffectif( $Effectif );

            //enregistrer la ConventionCollective 
            $ConventionCollective = $user->getConventionCollective();
            $ConventionCollective = strip_tags( $ConventionCollective );
            $user->setEffectif( $ConventionCollective );

            //enregistrer Employeur Public|| Public 
            $EmployeurPublic = $user->getEmployeurPublic();
            $EmployeurPublic = strip_tags( $EmployeurPublic );
            $user->setEmployeurPublic( $EmployeurPublic );
             
            //enregistrer Employeur Public|| Public 
            $CodeIDCCConvention = $user->getCodeIDCCConvention();
            $CodeIDCCConvention = strip_tags( $CodeIDCCConvention );
            $user->setCodeIDCCConvention( $CodeIDCCConvention );

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
    


    public function inscriptionMA(Request $request, ManagerRegistry $doctrine): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = new User();
        $form = $this->createForm(InscriptionMAType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

            $user->setRoles(['ROLE_MA']);

            $email = $user->getEmail();
            $user->setEmail($email);

            $fonction = $user->getFonctionMA();
            $user->setFonctionMA($fonction);
            
            $prenom = $user->getPrenom();
            $user->setPrenom($prenom);

            $tel = $user->getTelephone();
            $user->setTelephone($tel);

            $nom = $user->getNom();
            $nom = strip_tags( $nom );
            $user->setNom($nom);

            $dateNaissance = $user->getDateNaissance();
            $user->setDateNaissance($dateNaissance);

            $entityManager->persist($user); 
            $entityManager->flush();

            return $this->redirect($this->generateUrl('login'));
        }
        return $this->render( 'inscription/inscriptionMA.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function inscriptionFormateur(Request $request, EntityManagerInterface $manager)
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $contact = new User();
        $form = $this->createForm(InscriptioFormateurType::class, $contact);
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
            'inscription/inscriptionFormateurs.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function inscriptionEntrepriseSA(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $contact = new User();
        $form = $this->createForm(InscriptionEntrepriseType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $contact->getEmail();
            $mail = strip_tags($mail);
            $contact->setEmail($mail);

            //enregistrer le pw 
            $pw = $contact->getPassword();
            $pw = strip_tags($pw);
            $contact->setPassword($pw);

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
            'inscription/inscriptionEntreprise.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }


    public function inscriptionEleveAS(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $contact = new User();
        $form = $this->createForm(InscriptionApprentiType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //enregistrer le mail 
            $mail = $contact->getEmail();
            $mail = strip_tags($mail);
            $contact->setEmail($mail);

            //enregistrer le mail 
            $pw = $contact->getPassword();
            $pw = strip_tags($pw);
            $contact->setPassword($pw);

            //enregistrer le prenom 
            $prenom = $contact->getPrenom();
            $prenom = strip_tags($prenom);
            $contact->setPrenom($prenom);

            //enregistrer le date naissance 
            $date_naissance = $contact->getDateNaissance();
            $contact->setDateNaissance($date_naissance);

            //enregistrer le date adress 
            $adress = $contact->getAdresse();
            $adress = strip_tags($adress);
            $contact->setAdresse($adress);

            //enregistrer le date tel 
            $tel = $contact->getTelephone();
            $tel = strip_tags($tel);
            $contact->setTelephone($tel);

            //enregistrer nom
            $nom = $contact->getNom();
            $nom = strip_tags($nom);
            $contact->setNom($nom);

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($contact);
            $entityManager->flush();
            return $this->redirect($this->generateUrl('login'));
        }
        return $this->render(
            'inscription/inscriptionEleve.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function inscriptionApprenti(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $contact = new User();
        $form = $this->createForm(InscriptionApprentiType::class, $contact);
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
            'inscription/inscriptionApprenti.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function inscriptionInd(Request $request, ManagerRegistry $doctrine): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = new User();
        $form = $this->createForm(InscriptionIndType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();

            $user->setRoles(['ROLE_IND']);

            $email = $user->getEmail();
            $user->setEmail($email);

            $adresse = $user->getAdresse();
            $user->setAdresse($adresse);
            
            $prenom = $user->getPrenom();
            $user->setPrenom($prenom);

            $tel = $user->getTelephone();
            $user->setTelephone($tel);

            $nom = $user->getNom();
            $nom = strip_tags( $nom );
            $user->setNom($nom);

            $raisonSocial = $user->getRaisonSocial();
            $user->setRaisonSocial($raisonSocial);

            $dateNaissance = $user->getDateNaissance();
            $user->setDateNaissance($dateNaissance);

            $fonction = $user->getFonctionMA();
            $user->setFonctionMA($fonction);

            $Siret = $user->getSiret();
            $Siret = strip_tags( $Siret );
            $user->setSiret( $Siret );

            $NAF = $user->getNAF();
            $NAF = strip_tags( $NAF );
            $user->setNAF( $NAF );

            $Effectif = $user->getEffectif();
            $user->setEffectif( $Effectif );

            $ConventionCollective = $user->getConventionCollective();
            $ConventionCollective = strip_tags( $ConventionCollective );
            $user->setConventionCollective( $ConventionCollective );

            $EmployeurPublic = $user->getEmployeurPublic();
            $EmployeurPublic = strip_tags( $EmployeurPublic );
            $user->setEmployeurPublic( $EmployeurPublic );

            $CodeIDCCConvention = $user->getCodeIDCCConvention();
            $CodeIDCCConvention = strip_tags( $CodeIDCCConvention );
            $user->setCodeIDCCConvention( $CodeIDCCConvention );

            $entityManager->persist($user); 
            $entityManager->flush();

            return $this->redirect($this->generateUrl('login'));
        }
        return $this->render( 'inscription/inscriptionInd.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function addUserRaw(Request $request, $role, $roleName ) 
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = new User();
        $form = $this->createForm(AddUserType::class, $user);
        $form->handleRequest($request);
        $erreur = false;
        $listApp = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT prenom, role_string, nom, email  from user WHERE role_string = '$role' ");

        if ($form->isSubmitted() && $form->isValid()) 
        {
            try
            {
                $user->setRoles( [$role] );
                $doctrine = $this->getDoctrine();
                $entityManager = $doctrine->getManager();

                $entityManager->persist($user);
                $entityManager->flush();
                return $user->getId();
            }
            catch (\Exception $e)
            {
                $erreur = "L'adresse email est déjà utilisé !";
            }
        }
        
        return $this->render(
            'inscription/addUser.html.twig',
            [
                'form' => $form->createView(),
                'roleName' => $roleName,
                'erreur' => $erreur,
                'app' => $listApp
            ]
        );
    }

    public function addUser(Request $request, $role, $roleName ): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $userID = $this->addUserRaw($request, $role, $roleName );
        if ( is_int($userID) )
        {
            return $this->redirect($this->generateUrl('login'));
        }
        return $this->addUserRaw($request,  $role, $roleName );
    }

    public function addUserSession(Request $request, Session $session, $role, $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        $userID = $this->addUserRaw($request, $role, $roleName );
        if ( is_int($userID) )
        {
            // add à la session
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $user = $entityManager->getRepository(User::class)->find($userID);
            $session = $entityManager->getRepository(Session::class)->find($session);

            if (!$user) {
                throw $this->createNotFoundException(
                    'No user found for id '.$userID
                );
            }

            $user->addSession($session);
            $entityManager->flush();

            // add
            return $this->redirect($this->generateUrl('listUsersSession', array('session' => $session->getID(), 'role' => $role, 'roleName' => $roleName )));

        }
        return $userID;
    }


}