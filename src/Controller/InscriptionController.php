<?php
/*
    controller pour les inscription USER
    12/2/2022 


*/

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEntrepriseType;
use App\Form\InscriptioFormateurType;
use App\Entity\User;
use App\Entity\Session;
use App\Form\AddUserType;
use App\Form\InscriptionApprentiType;
use App\Form\InscriptionIndType;
use App\Form\InscriptionMAType;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\UserGeneralType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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

    function checkRGPD()
    {
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }

    public function inscriptionEntreprise(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = $this->getUser();
        $form = $this->createForm(InscriptionEntrepriseType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $old_pwd= $form->get('old_password')->getData();
        //   dd($old_pwd); 
            if ($encoder->isPasswordValid($user, $old_pwd)) 
            {
                $new_pwd= $form->get('new_password')->getData();
                // dd($new_pwd);
                $password = $encoder->encodePassword($user, $new_pwd);
        //    dd($password);
                $user->setPassword($password);
                $entityManager->persist($user);
                $entityManager->flush();
            }


          
            return $this->redirectToRoute('app_logout');
        }
        return $this->render('inscription/inscriptionEntreprise.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    public function userGeneralForm(Request $request, User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;


        $form = $this->createForm(UserGeneralType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('login');
        }
        return $this->render('inscription/userGeneralForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function inscriptionMA(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, Request $request ): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = $this->getUser();
        $form = $this->createForm(InscriptionMAType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $old_pwd= $form->get('old_password')->getData();
        //   dd($old_pwd); 
            if ($encoder->isPasswordValid($user, $old_pwd)) 
            {
                $new_pwd= $form->get('new_password')->getData();
                // dd($new_pwd);
                $password = $encoder->encodePassword($user, $new_pwd);
        //    dd($password);
                $user->setPassword($password);
                

            $entityManager->persist($user); 
            $entityManager->flush();
            }
            return $this->redirectToRoute('app_logout');
        }
        return $this->render( 'inscription/inscriptionMA.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //fonction qui enregistre un formateur dans la table user
    public function inscriptionFormateur(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, Request $request): Response
    {   //validation rgpd
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
    
        $user = $this->getUser();
        $form = $this->createForm(InscriptioFormateurType::class, $user);
        $form->handleRequest($request);  
    
        if ($form->isSubmitted() && $form->isValid()) {

            $old_pwd= $form->get('old_password')->getData();
        //   dd($old_pwd); 
            if ($encoder->isPasswordValid($user, $old_pwd)) 
            {
                $new_pwd= $form->get('new_password')->getData();
                // dd($new_pwd);
                $password = $encoder->encodePassword($user, $new_pwd);
        //    dd($password);
                $user->setPassword($password);
                $entityManager->persist($user);
                $entityManager->flush();

            $entityManager->persist($user);
            $entityManager->flush();

            }
            return $this->redirectToRoute('app_logout');
        }
        return $this->render(
            'inscription/inscriptionFormateurs.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function inscriptionApprenti(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = $this->getUser();
        $form = $this->createForm(InscriptionApprentiType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {

            $old_pwd= $form->get('old_password')->getData();
            //   dd($old_pwd); 
                if ($encoder->isPasswordValid($user, $old_pwd)) 
                {
                    $new_pwd= $form->get('new_password')->getData();
                    // dd($new_pwd);
                    $password = $encoder->encodePassword($user, $new_pwd);
            //    dd($password);
                    $user->setPassword($password);
                    $entityManager->persist($user);
                    $entityManager->flush();

                }
            return $this->redirectToRoute('app_logout');
        }
        return $this->render(
            'inscription/inscriptionApprenti.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    public function inscriptionInd(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user = $this->getUser();
        $form = $this->createForm(InscriptionIndType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

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
                $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';
                $user->setPassword($hashPW ); //0000

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
        // dd( $userID );
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