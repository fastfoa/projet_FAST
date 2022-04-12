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
        if ($user == null)
            return $this->redirectToRoute("login");
        if (!$user->getRGPDOK())
            return $this->redirectToRoute("rgpdForm");
        return null;
    }

    public function dashOFPrincipal(): Response
    {

        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        //$listSession = $doctrine->getRepository(Session::class)->findAll();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $listSession = getSQLArrayAssoc($login, $pw, 'SELECT session.id, formation.nom as f, session.debut, session.fin, session.nom 
        FROM session, formation 
        WHERE formation.id=session.id_formation');


        return $this->render(
            'dash/dashOFPrincipal.html.twig',
            [
                'listSession' => $listSession,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),
            ]
        );
    }

    public function addSession(Request $request): Response
    {

        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $session = new Session();

        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($session);
            $em->flush();
            return $this->redirectToRoute("dashOFPrincipal");
        }

        $menu =
            [
                'Sessions' => 'dashOFPrincipal',
                'Apprentis' => 'listAllAprentis',
                'Formateurs' => 'listAllFormateurs',
                'Maitres d\'apprentissage' => 'listAllMA',
                'Entreprises' => 'listAllEntreprises'
            ];
        return $this->render('dash/addSession.html.twig', [
            'form' => $form->createView(),
            'menu' => getMenuFromRole($this->getUser()->getRoleString()),


        ]);
    }


    public function deleteSession(Session $session)
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        $om = $doctrine->getManager();
        $om->remove($session);
        $om->flush();
        return $this->redirectToRoute("dashOFPrincipal");
    }

    

    public function dashEntreprise(): Response
    {
        $infoOF = getInfoOF();

        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $user       = $this->getUser();
        $role       = $user->getRoleString();
        $user       = convertUserEntity2SQL($login, $pw, $user->getId());
        $entreprise = $user;

        $OF         = getInfoOF();
        $MA         = null;
        $app        = null;
        $formateur  = null;

        $MA = getMAFromEnt($login, $pw, $entreprise['id']);
        if ( $MA != false )
        {
            $MA = convertUserEntity2SQL($login, $pw, $MA['id']);
            $app = getAppFromMA($login, $pw, $MA['id']);
            if ( $app != false )
            {
                $app = convertUserEntity2SQL($login, $pw, $app['id']);
                $formateur  = getFormateursFromApprenti($login, $pw, $app['id']);
                if ( $formateur != false )
                {
                    $formateur  = convertUserEntity2SQL($login, $pw, $formateur[0]['id']);
                }
            }
        }

        $uid = $user['id'];
        $listDoc = getDocsFromUser( $login, $pw, $uid );


        return $this->render(
            'dash/dashEntreprise.html.twig',
            [
                'document'      => $listDoc,
                'user'           => $user,
                'entreprise'    => $entreprise,
                'app'           => $app,
                'ma'            => $MA,
                'OF'            => $infoOF,
                'menu'          => getMenuFromRole('ROLE_ENT')
            ]
        );
    }
    public function dashMA(): Response
    {
        $infoOF = getInfoOF();

        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $user       = $this->getUser();
        $role       = $user->getRoleString();
        $user       = convertUserEntity2SQL($login, $pw, $user->getId());
        $MA = $user;

        $OF         = getInfoOF();
        $entreprise = null;
        $app        = null;
        $formateur  = null;

        // $MA = getMAFromEnt($login, $pw, $entreprise['id']);
        if ( $MA != false )
        {
            $MA = convertUserEntity2SQL($login, $pw, $MA['id'])    ;
            $app = getAppFromMA($login, $pw, $MA['id']);
            if ( $app != false )
            {
                $app = convertUserEntity2SQL($login, $pw, $app['id']);
                $formateur  = getFormateursFromApprenti($login, $pw, $app['id']);
                if ( $formateur != false )
                {
                    $formateur  = convertUserEntity2SQL($login, $pw, $formateur[0]['id']);
                }
            }
        }

        $uid = $user['id'];
        $listDoc = getDocsFromUser( $login, $pw, $uid );


        return $this->render(
            'dash/dashMA.html.twig',
            [
                'document'      => $listDoc,
                'user'           => $user,
                'entreprise'    => $entreprise,
                'app'           => $app,
                'ma'            => $MA,
                'OF'            => $infoOF,
                'menu'          => getMenuFromRole('ROLE_ENT')
            ]
        );
    }


    
    public function dashFormateur(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $infoOF = getInfoOF();

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $user       = $this->getUser();
        $role       = $user->getRoleString();
        $user       = convertUserEntity2SQL($login, $pw, $user->getId());
        $formateur = $user;
        $session = false;
        $listAPP = false;
        $listFORMATEUR = false;
        $listMA = false;

        //dd( $user );
        

        $sessionID = getIdSessionFromApprenti($login, $pw, $user['id']);
        //dd( $sessionID );
        if ( $sessionID != null )
        {
            $session =  convertSessionEntity2SQL($login, $pw, $sessionID);
            $listAPP        =  getAppsFromSession($login, $pw, $sessionID ); 
            $listFORMATEUR  =  getFormateurFromSession($login, $pw, $sessionID ); 
            $listMA         =  getMAFromSession($login, $pw, $sessionID );
        }
        $listDoc = getDocsFromUser( $login, $pw, $user['id'] );

        //dd( $user );
        return $this->render(
        'dash/dashFormateur.html.twig', 
            [
                'user'          => $user,
                'document'      => $listDoc,
                'OF'            => $infoOF,
                'listMA'        => $listMA,
                'listFORMATEUR' => $listFORMATEUR,
                'listAPP'       => $listAPP,
                'session'       => $session,
                'menu'          => getMenuFromRole($this->getUser()->getRoleString())
            ]
        );
    }


    public function dashOFSession(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $sessionID = $session->getId();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $listAPP        =  getAppsFromSession($login, $pw, $sessionID ); 
        $listFORMATEUR  =  getFormateurFromSession($login, $pw, $sessionID ); 
        $listMA         =  getMAFromSession($login, $pw, $sessionID );

        return $this->render(
        'dash/dashOFSession.html.twig', 
            [
                'listMA'        => $listMA,
                'listFORMATEUR' => $listFORMATEUR,
                'listAPP'       => $listAPP,
                'session'       => $session,
                'menu'          => getMenuFromRole($this->getUser()->getRoleString())
            ]
        );
    }


    public function listUsersEntreprise(User $entreprise, $role, $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        $list = $doctrine->getRepository(User::class)->findAll();

        return $this->render(
            'dash/listUsersEntreprise.html.twig',
            [
                'list' => $list,
                'entreprise' => $entreprise,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),            'roleName' => $roleName,
                'role' => $role
            ]
        );
    }
    public function listUsersSession(Session $session, $role, $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        $sessionID = $session->getId();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $list = getSQLArrayAssoc(
            $login,
            $pw,
            "SELECT user.nom, user.prenom, user.telephone, user.email, user.id 
             FROM  user_in_session as s 
             LEFT JOIN user ON s.id_user=user.id 
             WHERE s.id_session=$sessionID and user.role_string='$role'"
        );

        return $this->render(
            'dash/listUsersSession.html.twig',
            [
                'list' => $list,
                'session' => $session,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),
                'roleName' => $roleName,
                'role' => $role
            ]
        );
    }

    public function listApprentis(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listUsersSession($session, 'ROLE_APP', 'Apprenti');
    }

    public function listFormateurs(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listUsersSession($session, 'ROLE_FORMATEUR', 'Formateur');
    }

    public function listMA(Session $session): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listUsersSession($session, 'ROLE_MA', "Maitre d'apprentissage");
    }


    public function listAll($role,  $roleName): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        //$list = $doctrine->getRepository(User::class)->findAll();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        if ( $role == 'ROLE_MA'){
        $list = getSQLArrayAssoc(
            $login,
            $pw,
           /*"SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
             FROM  user
             LEFT JOIN user_in_session as us ON us.id_user=user.id 
             LEFT JOIN session as s ON us.id_session=s.id 
             WHERE user.role_string='$role'"              
        );         */                                            
                                    

      /*  "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.session, m.id_ent, 
        (select nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles                 
         FROM  projet_fast.mahas_ent as m          
         RIGHT JOIN  projet_fast.user as u ON u.id=m.id_ma 
         WHERE u.roles like '%ROLE_MA%'");                */
         
        "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
         FROM mahas_ent as m 
         RIGHT JOIN  user as u ON u.id=m.id_ma 
         LEFT JOIN user_in_session as us ON us.id_user=u.id 
         LEFT JOIN session as s ON us.id_session=s.id 
         WHERE u.roles like '%ROLE_MA%';");} 
         
         else { $list =  getSQLArrayAssoc(
            $login,
            $pw,
            "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
            FROM  user
            LEFT JOIN user_in_session as us ON us.id_user=user.id 
            LEFT JOIN session as s ON us.id_session=s.id 
            WHERE user.role_string='$role'"   ); }
                                                                        

        return $this->render(
            'dash/listUser.html.twig',
            [
                'list' => $list,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()), 
                'role' => $role,
                'roleName' => $roleName
            ]
        );
    }

    public function listAllAprentis(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listAll('ROLE_APP', 'Apprenti');
    }

    public function listAllFormateurs(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listAll('ROLE_FORMATEUR', 'Formateur');
    }

    public function listAllEntreprises(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listAll('ROLE_ENT', 'Entreprise');
    }

    public function listAllMA(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        return $this->listAll('ROLE_MA', "Maitre d'apprentissage");
    }



    // public function dashENTprincipalx(): Response

    public function dashApp(): Response
    {
        $infoOF = getInfoOF();

        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $login  = $this->getParameter('loginDB');
        $pw     = $this->getParameter('PasswordDB');
        
        $user       = $this->getUser();
        $role       = $user->getRoleString();
        $user       = convertUserEntity2SQL($login, $pw, $user->getId());
        $app        = $user;
        $OF         = getInfoOF();
        $MA         = false;
        $formateur  = false;
        $entreprise = false;
        $sessionID = getIdSessionFromApprenti($login, $pw, $user['id']);


        $MA = getMAFromApprenti($login, $pw, $app['id']);
        if ( $MA )
        {
            $MA = convertUserEntity2SQL($login, $pw, $MA['id'] );
            $entreprise = getENTFromMA($login, $pw, $MA['id']);
            if ( $entreprise )
                $entreprise = convertUserEntity2SQL($login, $pw, $entreprise['id'] );
        }
        
   
        //    $formateur  = getFormateursFromApprenti($login, $pw, 
        // $app['id']);
        
        $listFormateur = getSQLArrayAssoc(
            $login,
            $pw,
 
        "SELECT u.nom, u.prenom, u.email, u.id 
        FROM user_in_session as us0, 
            user_in_session as us1, 
            user as u 
        WHERE 
        us0.id_session=us1.id_session and u.id=us1.id_user and u.role_string='ROLE_FORMATEUR' 
        and us0.id_user='$sessionID'"
);
    //    dd($listFormateur);

        $uid = $app['id'];
        $listDoc = getDocsFromUser( $login, $pw, $uid );


        return $this->render(
            'dash/dashApp.html.twig',
            [
                'document'      => $listDoc,
                'user'          => $user,
                'entreprise'    => $entreprise,
                'app'           => $app,
                'ma'            => $MA,
                'OF'            => $infoOF,
                'formateurs'    => $listFormateur,
                'menu'          => getMenuFromRole('ROLE_APP')

            ]
        );
    }
}
