<?php

namespace App\Controller;

use App\Controller\InscriptionController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\ProfilController;
use App\Entity\Session;
use App\Entity\User;
use App\Form\SessionType;



class DashController extends AbstractController
{
    /**
     * @Route("/dash", name="dash")
     */
    public function index(): Response
    {
        return $this->render('dash/index.html.twig', [
            'controller_name' => 'DashController',
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

    public function dashOFPrincipal(): Response
    {
        
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        //$listSession = $doctrine->getRepository(Session::class)->findAll();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $listSession = getSQLArrayAssoc($login, $pw, 'SELECT session.id, formation.nom as f, session.debut, session.fin, session.nom 
        FROM session, formation 
        WHERE formation.id=session.id_formation' );
        


        //return new JsonResponse( $listSession );
        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];
        return $this->render(
        'dash/dashOFPrincipal.html.twig', 
        [
            'listSession' => $listSession,
            'menu' => $menu,
        ]);    
    }
    public function addSession(Request $request): Response
    {
        
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $session =new Session();

        $form = $this->createForm(SessionType::class,$session);
         $form->handleRequest($request);
         if($form->isSubmitted()&& $form->isValid())
         {
            $doctrine =$this->getDoctrine();
            $em =$doctrine->getManager();
            $em ->persist($session);
            $em->flush();
            return $this->redirectToRoute("dashOFPrincipal");         }

            $menu = 
            [
                'Sessions' => 'dashOFPrincipal', 
                'Apprentis' => 'listAllAprentis', 
                'Formateurs' => 'listAllFormateurs', 
                'Maitres' => 'listAllMA', 
                'Entreprises' => 'listAllEntreprises' 
            ];
            return $this->render('dash/addSession.html.twig', [
            'form' => $form->createView(),
            'menu' => $menu

        ]);
    }

    
   public function deleteSession(Session $session )
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        $om = $doctrine->getManager();
        $om->remove($session);
        $om->flush();
        return $this->redirectToRoute("dashOFPrincipal");
    }
                            
    

    public function dashEntreprise(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $entreprise = $this->getUser();

        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];
        return $this->render(
        'dash/dashEntreprise.html.twig', 
        [
            'entreprise' => $entreprise,
            'menu' => $menu
        ]);    
    }
    
   
    
    public function dashOFSession(Session $session ): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];
        return $this->render(
        'dash/dashOFSession.html.twig', 
        [
            'session' => $session,
            'menu' => $menu
        ]);    
    }


    public function listUsersEntreprise(User $entreprise, $role, $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        $list = $doctrine->getRepository(User::class)->findAll();
    
        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];

        return $this->render(
        'dash/listUsersEntreprise.html.twig', 
        [
            'list' => $list,
            'entreprise' => $entreprise,
            'menu' => $menu,
            'roleName' => $roleName,
            'role' => $role
        ]);    
    }
    public function listUsersSession(Session $session, $role, $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        $sessionID = $session->getId();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $list = getSQLArrayAssoc( $login, $pw, 
            "SELECT user.nom, user.prenom, user.telephone, user.email, user.id 
             FROM  user_in_session as s 
             LEFT JOIN user ON s.id_user=user.id 
             WHERE s.id_session=$sessionID and user.role_string='$role'");
    
        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];

        return $this->render(
        'dash/listUsersSession.html.twig', 
        [
            'list' => $list,
            'session' => $session,
            'menu' => $menu,
            'roleName' => $roleName,
            'role' => $role
        ]);    
    }

    public function listApprentis(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listUsersSession($session, 'ROLE_APP', 'Apprenti');
    }

    public function listFormateurs(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listUsersSession($session, 'ROLE_FORMATEUR', 'Formateur');
    }

    public function listMA(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listUsersSession($session, 'ROLE_MA', "Maitre d'apprentissage");
    }

  
    public function listAll( $role,  $roleName ): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        //$list = $doctrine->getRepository(User::class)->findAll();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $list = getSQLArrayAssoc( $login, $pw,
            "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
             FROM  user
             LEFT JOIN user_in_session as us ON us.id_user=user.id 
             LEFT JOIN session as s ON us.id_session=s.id 
             WHERE user.role_string='$role'");
    

        //return new Response( "toto");
        $menu = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];

        return $this->render(
        'dash/listUser.html.twig', 
        [
            'list' => $list,
            'menu' => $menu,
            'role' => $role,
            'roleName' => $roleName
        ]);    
    }
    
    public function listAllAprentis(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listAll( 'ROLE_APP', 'Apprenti' );
    }
    
    public function listAllFormateurs(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listAll( 'ROLE_FORMATEUR','Formateur' );
    }
    
    public function listAllEntreprises(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->listAll( 'ROLE_ENT','Entreprise' );
    }

    public function listAllMA(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->listAll( 'ROLE_MA', "Maitre d'apprentissage" );
    }




    // public function dashENTprincipalx(): Response

    public function dashApp(User $apprenti ): Response


    // public function dashApp( ): Response

    {
        $apprenti = $this->getUser();

        $menuA = 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ];
        
        return $this->render(
        'dash/dashApp.html.twig', 
        [
            'apprenti' => $apprenti,
            'menu' => $menuA
        ]);    
    }
  
}
