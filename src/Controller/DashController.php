<?php

namespace App\Controller;

use App\Controller\InscriptionController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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

    public function dashOFPrincipal(): Response
    {
        $doctrine = $this->getDoctrine();
        $listSession = $doctrine->getRepository(Session::class)->findAll();

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
            'menu' => $menu
        ]);    
    }

    public function addSession(Request $request): Response
    {
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
            $doctrine = $this->getDoctrine();
            $om = $doctrine->getManager();
            $om->remove($session);
            $om->flush();
            return $this->redirectToRoute("dashOFPrincipal");
    }
                                           
    public function dashOFSession(Session $session ): Response
    {
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

    public function listUsersSession(Session $session, $role, $roleName): Response
    {
        $doctrine = $this->getDoctrine();
        $sessionID = $session->getId();
        $list = getSQLArrayAssoc( 
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
        return $this->listUsersSession($session, 'ROLE_APP', 'Apprenti');
    }

    public function listFormateurs(Session $session): Response
    {
        return $this->listUsersSession($session, 'ROLE_FORMATEUR', 'Formateur');
    }

    public function listMA(Session $session): Response
    {
        return $this->listUsersSession($session, 'ROLE_MA', "Maitre d'apprentissage");
    }

  
    public function listAll( $role,  $roleName ): Response
    {
        $doctrine = $this->getDoctrine();
        $list = $doctrine->getRepository(User::class)->findAll();
    
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
        return $this->listAll( 'ROLE_APP', 'Apprenti' );
    }
    
    public function listAllFormateurs(): Response
    {
        return $this->listAll( 'ROLE_FORMATEUR','Formateur' );
    }
    
    public function listAllEntreprises(): Response
    {
        return $this->listAll( 'ROLE_ENT','Entreprise' );
    }

    public function listAllMA(): Response
    {
        return $this->listAll( 'ROLE_MA', "Maitre d'apprentissage" );
    }

}
