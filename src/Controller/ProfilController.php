<?php

namespace App\Controller;

use App\Entity\AppHasMA;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
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


    public function editUser( User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
           
            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');

        //$aut = $this->getUser();
        //$roleViewer = $aut->getRoles()[0];
        $roleViewer = 'ROLE_OF';
        $roleTarget = $user->getRoleString();
        $listFormateur=[];
        $ent=[];
        
        $id = $user->getId();
        $infoOF = getInfoOF();
    
        $sessionID = getIdSessionFromApprenti($login, $pw,  $id );
        
        //$listFormateur= getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        // requete liste formateur d'un app.
        $listDoc = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName
        FROM document, user
        WHERE user.id=document.id_owner AND user.id=".$user->getId());

        $ma = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, u.prenom, u.telephone, u.id, u.role_string                   
         FROM app_has_ma as a
         RIGHT JOIN user as u ON u.id=a.id_ma 
         WHERE a.id_apprenti=".$user->getId());
   $MA = getMAFromApprenti($login, $pw, $id);
   if ( $MA )
   {
       $MA = convertUserEntity2SQL($login, $pw, $MA['id'] );
       $entreprise = getENTFromMA($login, $pw, $MA['id']);
       if ( $entreprise )
           $entreprise = convertUserEntity2SQL($login, $pw, $entreprise['id'] );
   }

        //  for ($i=0; $i <sizeof($ma) ; $i++) { 
        //     array_push($ent, getENTFromMA($login, $pw, $ma[1]['id']));
        //  }
    //dd($entreprise);
        $listMa = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT id, nom, prenom, email FROM user WHERE role_string='ROLE_MA'");

        $listFormateur = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
          "SELECT u.nom, u.prenom, u.email, u.id 
          FROM user_in_session as us0, user_in_session as us1, user as u  
          WHERE us0.id_session=us1.id_session and u.id=us1.id_user 
          and u.role_string='ROLE_FORMATEUR' 
          and us0.id_user='$sessionID'");

      
        if ( $roleViewer ==  'ROLE_OF' )
        // ajout listFormateur dans if role_app
        {
                 if ($roleTarget == 'ROLE_APP')
                        return $this->profilOF_APP($user, $listMa, $ma, $id, $listDoc, $listFormateur, $infoOF, $entreprise);
            else if ($roleTarget == 'ROLE_FORMATEUR')
                        return $this->profilOF_Formateur($user, $id, $listDoc);
            else if ($roleTarget == 'ROLE_MA')
                        return  $this->profilOF_MA($user, $id, $listDoc);
            else if ($roleTarget == 'ROLE_ENT')
                       return $this->profilOF_Entreprise($user, $id, $listDoc);
        }
    }

    public function insertMA($idMa, User $idApp): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        $entityManager = $doctrine->getManager();
        $id = $idApp->getId();
        $r = new AppHasMA();
        $r->setIdApprenti( $id );
        $r->setIdMA( $idMa );
        $entityManager->persist($r);
        $entityManager->flush();

        return new JsonResponse("Maitre d'apprentissage enregistré");
    }

    // Organisme de Formation regarde les infos de :    
    // l'apprenti 
    // listFormateur dans la parenthèse
    public function profilOF_APP(User $user, $listMa, $ma, $id, $listDoc, $listFormateur, $infoOF,$entreprise): Response
    { 
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;   
            //dd($infoOF);          
        //dd( $entreprise );
        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'listMa' => $listMa,
            'ma' => $ma,
            'id' => $id,
            'document' => $listDoc,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),
            'OF'   => $infoOF,         
            'fonction' => "Apprenti", 
            'listFormateur'=> $listFormateur,
            'entreprise'=>$entreprise
        ]);
    }    
    // formateur
    public function profilOF_Formateur(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Formateur.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            
            'fonction' => "Formateur"        
        ]);
    }       
    // maitre d'apprentissage
    public function profilOF_MA(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_MA.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Maître d'Apprentissage",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            'fonction' => "Maître d'Apprentissage"        
        ]);
    }    
    // l'entreprise
    public function profilOF_Entreprise(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Entreprise.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Entreprise",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            
            'fonction' => "Entreprise"        
        ]);
    }
    
    // L'Apprenti regarde les infos de:
    // l'OF
    public function profilAPP_OF(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Organisme de Formation",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            
            'fonction' => "Organisme de Formation"        
        ]);
    }
    // formateur
    public function profilAPP_Formateur(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Formateur.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'fonction' => "Formateur",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            
            'fonction' => "Formateur"        
        ]);
    }
    // maître d'apprentissage 
    public function profilAPP_MA(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_MA.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Maître d'apprentissage",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            
            'fonction' => "Maître d'apprentissage"        
        ]);
    }
    // l'entreprise
    public function profilAPP_Entreprise(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Entreprise.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Entreprise",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            'fonction' => "Entreprise"        
        ]);
    }

    // Le Formateur regarde les infos de :
    //l'OF
    public function profilFOR_OF(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Organisme de formation" ,       
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            
            'fonction' => "Organisme de formation"        
        ]);
    }        
    // l'apprenti
    public function profilFOR_APP(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_APP.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Apprenti",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            'fonction' => "Apprenti"        
        ]);
    }
    // maître d'apprentissage
    public function profilFOR_MA(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_MA.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'fonction' => "Maître d'apprentissage",
             'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
             'id' => $id,
             'fonction' => "Maître d'apprentissage"
         ]);
    }
    // l'entreprise
    public function profilFOR_Entreprise(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_Entreprise.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'fonction' => "Entreprise",
             'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
             'id' => $id,
             'fonction' => "Entreprise"
         ]);
    }

    // maître d'apprentissage regarde les infos de :
    // l'OF
    public function profilMA_OF(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_OF.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'fonction' => "Organisme de formation",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilMA_APP(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_APP.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Apprenti",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilMA_FOR(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilMA_FOR.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'fonction' => "Formateur",
             'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
             'id' => $id,
             'fonction' => "Formateur"
         ]);
    } 

        // L'entreprise regarde les infos de :
    // l'OF
    public function profilENT_OF(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'fonction' => "Organisme de formation",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'id' => $id,
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilENT_APP(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_APP.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'fonction' => "Apprenti",        
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilENT_FOR(User $user, $id, $listDoc): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilENT_FOR.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'fonction' => "Formateur",
             'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
             'id' => $id,
             'fonction' => "Formateur"
         ]);
    } 
}