<?php

namespace App\Controller;

use App\Controller\InscriptionController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\ProfilController;
use App\Entity\Document;
use App\Form\DocumentExtType;
use App\Entity\RecipientDocument;
use App\Entity\Session;
use App\Entity\User;
use App\Form\FiltreType;
use App\Form\SessionType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Length;

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
        FROM projet_fast.`session`, projet_fast.formation 
        WHERE formation.id = session.id_formation AND session.archive = 0');

        $listArchive = getSQLArrayAssoc($login, $pw, 'SELECT session.id, formation.nom as f, session.debut, session.fin, session.nom 
        FROM projet_fast.`session`, projet_fast.formation 
        WHERE formation.id = session.id_formation AND session.archive = 1');


        return $this->render(
            'dash/dashOFPrincipal.html.twig',
            [
                'listSession' => $listSession,
                'listArchive' => $listArchive,
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
            $form = $session->setArchive('0');
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

    public function archivageSession(Session $session)
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;
            $doctrine = $this->getDoctrine();
            $sessionID = $session->getId();
            $login = $this->getParameter('loginDB');
            $pw = $this->getParameter('PasswordDB');
    
             getSQLRaw(
                $login,
                $pw,
                "UPDATE projet_fast.`session`SET ARCHIVE = TRUE WHERE session.id = $sessionID"
            );
      
        return $this->redirectToRoute("dashOFPrincipal");
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
        $entreprise       = convertUserEntity2SQL($login, $pw, $user->getId());
       
        
        $OF         = getInfoOF();
        $MA         = null;
        $app        = [];
        $formateur  = [];
        $appter = [];
        $MABIS = [];
        $formateurter = [];

        $MA = getMAFromEnt($login, $pw, $entreprise['id']);

        // dd($MA);

        if ($MA != false) {
            for ($i = 0; $i < sizeof($MA); $i++) {

                array_push($MABIS, convertUserEntity2SQL($login, $pw, $MA[$i]['id']));
                array_push($app, getAppFromMA($login, $pw, $MA[$i]['id']));
            }
            //  dd($app);
            $appbis = [];

            for ($j = 0; $j < sizeof($app); $j++) {
                $appbis = array_merge($appbis, $app[$j]);
            }
            //   dd($appbis);
            if ($appbis != false) {

                $appter = [];

                for ($k = 0; $k < sizeof($appbis); $k++) {
                    array_push($appter, convertUserEntity2SQL($login, $pw, $appbis[$k]['id']));
                }
                //   dd($appter);

                for ($r = 0; $r < sizeof($appter); $r++) {
                    array_push($formateur, getFormateursFromApprenti($login, $pw, $appter[$r]['id']));
                }
                // dd($formateur);
                $formateurbis = [];
                for ($m = 0; $m < sizeof($formateur); $m++) {
                    $formateurbis = array_merge($formateurbis, $formateur[$m]);
                }
                // $formateurbis = array_unique($formateurbis);
                // dd($formateurbis);

                $formateurter = [];

                for ($n = 0; $n < sizeof($formateurbis); $n++) {
                    array_push($formateurter, convertUserEntity2SQL($login, $pw, $formateurbis[$n]['id']));
                }
                //   dd($formateurter);


            }
        }





        return $this->render(
            'dash/dashEntreprise.html.twig',
            [
               
                'user'           => $user,
                'entreprise'    => $entreprise,
                'apps'           => $appter,
                'mas'            => $MABIS,
                'OF'            => $infoOF,
                'formateurs' => $formateurter,
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
        $formateurter = [];
        $appter = [];
        $OF         = getInfoOF();
        $entreprise = null;
        $app        = [];
        $formateur  = [];
        //  dd($MA); 
        $formateurbis = [];
        $app = getAppFromMA($login, $pw, $MA['id']);

        $appbis = [];
        if ($app != false) {
            for ($j = 0; $j < sizeof($app); $j++) {
                array_push($appbis, $app[$j]);
            }
            //   dd($appbis);
            if ($appbis != false) {
                for ($k = 0; $k < sizeof($appbis); $k++) {

                    array_push($appter, convertUserEntity2SQL($login, $pw, $appbis[$k]['id']));
                }
                // dd($appter);
                for ($r = 0; $r < sizeof($appter); $r++) {
                    array_push($formateur, getFormateursFromApprenti($login, $pw, $appter[$r]['id']));
                }
                // dd($formateur);
               
                for ($m = 0; $m < sizeof($formateur); $m++) {
                    $formateurbis = array_merge($formateurbis, $formateur[$m]);
                }
                // $formateurbis = array_unique($formateurbis);
                //  dd($formateurbis);

                for ($n = 0; $n < sizeof($formateurbis); $n++) {
                    array_push($formateurter, convertUserEntity2SQL($login, $pw, $formateurbis[$n]['id']));
                }
                //   dd($formateurter);




        }

}
        return $this->render(
            'dash/dashMA.html.twig',
            [

                'user'           => $user,
                'entreprise'    => $entreprise,
                'apps'           => $appter,
                'ma'            => $MA,
                'OF'            => $infoOF,
                'formateurs' => $formateurter,
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

        $listAPP = [];
        $listFORMATEUR = [];
        $listMA = [];
// dd($formateur);
        $sessionID = getSessionFromFormateur($login, $pw, $formateur['id']);
        $SESSIONBIS = [];
        //   dd( $sessionID);     
    
        //   dd($sessionID[0])['id'];  
        $Sessionlistapp = [];
        $Sessionlistma = [];
        $Sessionlistform = [];
        if ($sessionID != null) { {
                for ($i = 0; $i < sizeof($sessionID); $i++) {

                    array_push($SESSIONBIS, convertSessionEntity2SQL($login, $pw, $sessionID[$i]['id']));
                    array_push($Sessionlistapp, getAppsFromSession($login, $pw, $sessionID[$i]['id']));
                    array_push($Sessionlistform, getFormateurFromSession($login, $pw, $sessionID[$i]['id']));
                    array_push($Sessionlistma, getMAFromSession($login, $pw, $sessionID[$i]['id']));
                }
                // dd($SESSIONBIS);
            //    dd($Sessionlistapp);
             

                //   dd($appbis);
            }

        }
        $listDoc = getDocsFromUser($login, $pw, $user['id']);

        // dd( $sessionID );
        return $this->render(
            'dash/dashFormateur.html.twig',
            [
                'user'          => $user,
                'document'      => $listDoc,
                'OF'            => $infoOF,
                'listMAS'        => $Sessionlistma,
                'listFORMATEURS' => $Sessionlistform,
                'listAPPS'       => $Sessionlistapp,
                'sessions'       => $SESSIONBIS,
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

        $listAPP        =  getAppsFromSession($login, $pw, $sessionID);
        $listFORMATEUR  =  getFormateurFromSession($login, $pw, $sessionID);
        $listMA         =  getMAFromSession($login, $pw, $sessionID);

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
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),          
                  'roleName' => $roleName,
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


    public function listAll($role,  $roleName , Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        //$list = $doctrine->getRepository(User::class)->findAll();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $form = $this->createForm(FiltreType::class);
        $form->handleRequest($request);
        $data = $form->get('filtretext')->getData();
    if($data != ''){ 
        if ($form->isSubmitted() && $form->isValid()) {  
            if ($role == 'ROLE_MA') {
                $list = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
                    FROM mahas_ent as m 
                    RIGHT JOIN  user as u ON u.id=m.id_ma 
                    LEFT JOIN user_in_session as us ON us.id_user=u.id 
                    LEFT JOIN session as s ON us.id_session=s.id 
                    WHERE ( u.nom LIKE '%$data%'
                       OR u.prenom LIKE '%$data%'
                       OR u.email LIKE '%$data%' )
                       AND u.role_string= 'ROLE_MA';'"
                );
            } else {
                $list =  getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                    FROM  user
                    LEFT JOIN user_in_session as us ON us.id_user=user.id 
                    LEFT JOIN session as s ON us.id_session=s.id 
                    WHERE ( user.nom LIKE '%$data%'
                    OR user.prenom LIKE '%$data%'
                    OR user.email LIKE '%$data%' )
                    AND user.role_string= '$role';"
                );
            }
           
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            // $entityManager->persist($user); 
            $entityManager->flush();
            }
        }

    else{
      
        if ($role == 'ROLE_MA') {
            $list = getSQLArrayAssoc(
                $login,
                $pw,


                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
         FROM mahas_ent as m 
         RIGHT JOIN  user as u ON u.id=m.id_ma 
         LEFT JOIN user_in_session as us ON us.id_user=u.id 
         LEFT JOIN session as s ON us.id_session=s.id 
         WHERE u.roles like '%ROLE_MA%';"
            );
        } else {
            $list =  getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
            FROM  user
            LEFT JOIN user_in_session as us ON us.id_user=user.id 
            LEFT JOIN session as s ON us.id_session=s.id 
            WHERE user.role_string='$role'"
            );
        }

        }

        return $this->render(
            'dash/listUser.html.twig',
            [
                'list' => $list,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),
                'role' => $role,
                'roleName' => $roleName,
                'myForm' => $form->createView(),
             
            ]
        );
    }
    public function triListeGlobale($param, $role, $role_name , Request $request): Response
    {
        // dd( $param );
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
        $listAux = [];
        $doctrine = $this->getDoctrine();
  

        $form = $this->createForm(FiltreType::class);
        $form->handleRequest($request);
        $data = $form->get('filtretext')->getData();

        // NOM_ASC
        if ($role == 'ROLE_MA') {
            return $this->triListeGlobaleMA($param , $request);
        } 
        else {
            if ($param == "NOM_ASC") {
                if($data != ''){ 
                    if ($form->isSubmitted() && $form->isValid()) {  
                        $listAux = getSQLArrayAssoc(
                        $login,
                         $pw,
                        "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                        FROM  user
                        LEFT JOIN user_in_session as us ON us.id_user=user.id 
                        LEFT JOIN session as s ON us.id_session=s.id 
                        WHERE ( user.nom LIKE '%$data%'
                        OR user.prenom LIKE '%$data%'
                        OR user.email LIKE '%$data%' )
                        AND user.role_string='$role' 
                        ORDER BY user.nom  ASC" );} 
                         $doctrine = $this->getDoctrine();
                         $entityManager = $doctrine->getManager(); 
                         $entityManager->flush();
                             }
                else{
                        $listAux = getSQLArrayAssoc(
                        $login,
                        $pw,
                        "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                        FROM  user
                        LEFT JOIN user_in_session as us ON us.id_user=user.id 
                        LEFT JOIN session as s ON us.id_session=s.id 
                        WHERE user.role_string='$role' ORDER BY user.nom  ASC");  
                            }
                        }
            // NOM_DESC
            else if ($param == "NOM_DESC") {
                $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.nom DESC"
                );
            }
            // PRENOM_ASC
            else if ($param == "PRENOM_ASC") {
                $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.prenom  ASC"
                );
            }
            // PRENOM_DESC
            else if ($param == "PRENOM_DESC") {
                $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.prenom  DESC"
                );
            }

            // EMAIL_ASC
            else if ($param == "EMAIL_ASC") {
                $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.email  ASC"
                );
            }
            // EMAIL_DESC
            else if ($param == "EMAIL_DESC") {
                $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.email DESC"
                );
            } else {
                $listAux = $this->listAll($role, $role_name , $request );
            }
            // dd($listAux);
            return $this->render(

                'dash/listUser.html.twig',

                [
                    'list' => $listAux,
                    'myForm' => $form->createView(),
                    'menu' => getMenuFromRole($this->getUser()->getRoleString()),
                    'role' => $role,
                    'roleName' => $role_name,
                   
                ]
            );
        }
    }

    public function listAllAprentis( Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;


            $role = "ROLE_APP";
            $roleName = 'Apprenti';
                   
            
            
        return $this->listAll($role, $roleName, $request );
    }


    public function listAllFormateurs(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;
      

        return $this->listAll('ROLE_FORMATEUR', 'Formateur' , $request);
    }


    public function listAllEntreprises(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;
           

        return $this->listAll('ROLE_ENT', 'Entreprise',$request);
    }
    public function triListeGlobaleMA($param , Request $request): Response
    {
        $listAux = [];
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
        $listAux = [];
        $doctrine = $this->getDoctrine();
  

        $form = $this->createForm(FiltreType::class);
        $form->handleRequest($request);
        $data = $form->get('filtretext')->getData();

        if ($param == "NOM_ASC") {
            if($data != ''){ 
                if ($form->isSubmitted() && $form->isValid()) {  
                    $listAux = getSQLArrayAssoc(
                    $login,
                     $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                    FROM  user
                    LEFT JOIN user_in_session as us ON us.id_user=user.id 
                    LEFT JOIN session as s ON us.id_session=s.id 
                    WHERE ( user.nom LIKE '%$data%'
                    OR user.prenom LIKE '%$data%'
                    OR user.email LIKE '%$data%' )
                    AND user.role_string='ROLE_MA' 
                    ORDER BY user.nom  ASC" );} 
                     $doctrine = $this->getDoctrine();
                     $entityManager = $doctrine->getManager(); 
                     $entityManager->flush();
                         }
            else{
                    $listAux = getSQLArrayAssoc(
                    $login,
                    $pw,
                    "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                    FROM  user
                    LEFT JOIN user_in_session as us ON us.id_user=user.id 
                    LEFT JOIN session as s ON us.id_session=s.id 
                    WHERE user.role_string='ROLE_MA' ORDER BY user.nom  ASC");  
                        }
                    }
        // NOM_ASC
        if ($param == "NOM_ASC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,


                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
            FROM mahas_ent as m 
            RIGHT JOIN  user as u ON u.id=m.id_ma 
            LEFT JOIN user_in_session as us ON us.id_user=u.id 
            LEFT JOIN session as s ON us.id_session=s.id 
            WHERE u.role_string = 'ROLE_MA' ORDER BY u.nom ASC"
            );
        }
        // NOM_DESC
        else if ($param == "NOM_DESC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
                FROM mahas_ent as m 
                RIGHT JOIN  user as u ON u.id=m.id_ma 
                LEFT JOIN user_in_session as us ON us.id_user=u.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE u.roles like '%ROLE_MA%' ORDER BY u.nom DESC;"
            );
        }
        // PRENOM_ASC
        else if ($param == "PRENOM_ASC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
            FROM mahas_ent as m 
            RIGHT JOIN  user as u ON u.id=m.id_ma 
            LEFT JOIN user_in_session as us ON us.id_user=u.id 
            LEFT JOIN session as s ON us.id_session=s.id 
            WHERE u.roles like '%ROLE_MA%' ORDER BY u.prenom ASC"
            );
        }
        // PRENOM_DESC
        else if ($param == "PRENOM_DESC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
                FROM mahas_ent as m 
                RIGHT JOIN  user as u ON u.id=m.id_ma 
                LEFT JOIN user_in_session as us ON us.id_user=u.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE u.roles like '%ROLE_MA%' ORDER BY u.prenom DESC;"
            );
        }
        // EMAIL_ASC
        else if ($param == "EMAIL_ASC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
            FROM mahas_ent as m 
            RIGHT JOIN  user as u ON u.id=m.id_ma 
            LEFT JOIN user_in_session as us ON us.id_user=u.id 
            LEFT JOIN session as s ON us.id_session=s.id 
            WHERE u.roles like '%ROLE_MA%' ORDER BY u.email ASC"
            );
        }
        // EMAIL_DESC
        else if ($param == "EMAIL_DESC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.id, m.id_ent, (select user2.nom from projet_fast.user as user2 where m.id_ent=user2.id) as nom_ent, u.roles, s.nom as ns
                FROM mahas_ent as m 
                RIGHT JOIN  user as u ON u.id=m.id_ma 
                LEFT JOIN user_in_session as us ON us.id_user=u.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE u.roles like '%ROLE_MA%' ORDER BY u.email DESC;"
            );
        }
        // ENT_ASC
        else if ($param == "ENT_ASC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.ent ASC"
            );
        }
        // ENT_DESC
        else if ($param == "ENT_DESC") {
            $listAux = getSQLArrayAssoc(
                $login,
                $pw,
                "SELECT user.nom, user.prenom, user.telephone, user.email, user.id, s.nom as ns
                FROM  user
                LEFT JOIN user_in_session as us ON us.id_user=user.id 
                LEFT JOIN session as s ON us.id_session=s.id 
                WHERE user.role_string='$role' ORDER BY user.ent DESC"
            );
        } else {
            $listAux = $this->listAll('ROLE_MA',  "Maitre d'apprentissage" , $request);
        }

        return $this->render(
            'dash/listUser.html.twig',
            [
                'list' => $listAux,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),
                'role' => 'ROLE_MA',
                'roleName' => "Maitre d'apprentissage",
                'myForm' => $form->createView(),
            ]
        );
    }

    public function listAllMA(Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;
           
        return $this->listAll('ROLE_MA', "Maitre d'apprentissage",$request);
    }


    public function dashApp(Request $request, SluggerInterface $slugger): Response
    { 
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');
  
        $listFormateur=[];
      
         $user  = $this->getUser();
         $id = $user->getId();
        //  dd($id);      
        $infoOF = getInfoOF();
    
        $sessionID = getIdSessionFromApprenti1($login, $pw,  $id );
        // dd($id);

        $listDoc = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName, document.date_create AS d_dateCreate
        FROM document, user
        WHERE user.id=document.id_owner AND user.id=".$user->getId());

        $ma = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, u.prenom, u.telephone, u.id, u.role_string, a.id as idl                  
         FROM app_has_ma as a
         RIGHT JOIN user as u ON u.id=a.id_ma 
         WHERE a.id_apprenti=".$user->getId());

        $MA = getMAFromApprenti($login, $pw, $id);
        if ( $MA ){
            $MA = convertUserEntity2SQL($login, $pw, $MA['id'] );
            $entreprise = getENTFromMA($login, $pw, $MA['id']);
       if ( $entreprise )
           $entreprise = convertUserEntity2SQL($login, $pw, $entreprise['id'] );
           }

    //dd($entreprise);
        $listMa = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT id, nom, prenom, email FROM user WHERE role_string='ROLE_MA'");

        $listFormateur = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
          "SELECT u.nom, u.prenom, u.email, u.id 
          FROM user_in_session as us0, user_in_session as us1, user as u  
          WHERE us0.id_session=us1.id_session and u.id=us1.id_user 
          and u.role_string='ROLE_FORMATEUR' 
          and us0.id_user='$sessionID'");

        $up = new Document();
        $user = $user;
        $roleString = $user->getRoleString();

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $formulaire = $this->createForm(DocumentExtType::class, $up);
        $formulaire->handleRequest($request);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {
            $file = $formulaire->get('fileName')->getData();
            if ($file) {
                //return new Response( " fichier : $file ");
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $originalExt = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                //return new Response( " fichier : $originalFilename . $originalExt uploadé ");
                $fullOrigineFileName = $originalFilename . "." . $originalExt;

                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $originalExt;
                // Move the file to the directory where brochures are stored

                try {
                    $file->move(
                        $this->getParameter('path_upload'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $up->setFileName($newFilename);
                $up->setIdOwner( $user->getId());
                $up->setFileNameOriginal($fullOrigineFileName);
                $up->setDateCreate(new \DateTime());

                $doctrine = $this->getDoctrine();
                $entityManager = $doctrine->getManager();

                $entityManager->persist($up); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)
                $entityManager->flush();

          
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( $id );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
          
           
                $entityManager->flush();
                $this->addFlash('message', "Document ajouté");
                //dd( $retour );
            }
        }

        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'listMa' => $listMa,
            'ma' => $ma,
            'id' => $id,
            'documents' => $listDoc,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),
            'OF'   => $infoOF,         
            'fonction' => "Apprenti", 
            'listFormateur'=> $listFormateur,
            'entreprise'=>$entreprise,
            'myform'            => $formulaire->createView(),
            'role'              => $roleString,
        ]);

     
    }    

    }
