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
use Symfony\Component\Security\Core\User\UserInterface;








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






    public function profilOF_APP(User $user,UserInterface $userInterface): Response
    { 
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
           
            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');

        //$aut = $this->getUser();
        //$roleViewer = $aut->getRoles()[0];
      
        $listFormateur=[];
        $role       = $userInterface->getRoles();
    

        
        $id = $user->getId();
        //   dd($id);
     
       
        $infoOF = getInfoOF();
    
        $sessionID = getIdSessionFromApprenti1($login, $pw,  $id );
        

        $listDoc = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName
        FROM document, user
        WHERE user.id=document.id_owner AND user.id=".$user->getId());

        $ma = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, u.prenom, u.telephone, u.id, u.role_string, a.id as idd                   
         FROM app_has_ma as a
         RIGHT JOIN user as u ON u.id=a.id_ma 
         WHERE a.id_apprenti=".$user->getId());
        // dd($ma);
        // $rolema=$ma[0]['role_string'];
        //dd($rolema);

        $MA = getMAFromApprenti($login, $pw, $id);
        if ( $MA ){
            $MA = convertUserEntity2SQL($login, $pw, $MA['id'] );
            $entreprise = getENTFromMA($login, $pw, $MA['id']);
       if ( $entreprise )
           $entreprise = convertUserEntity2SQL($login, $pw, $entreprise['id'] );
          // dd($MA);
   }

   $entreprise = $user;

    //dd($entreprise);
        $listMa = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT id, nom, prenom, email FROM user WHERE role_string='ROLE_MA'");
       // dd($listMa);

        $listFormateur = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
          "SELECT u.nom, u.prenom, u.email, u.id 
          FROM user_in_session as us0, user_in_session as us1, user as u  
          WHERE us0.id_session=us1.id_session and u.id=us1.id_user 
          and u.role_string='ROLE_FORMATEUR' 
          and us0.id_user='$sessionID'");

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
            'entreprise'=>$entreprise,
            
            /*'rolema'=>$rolema,*/
        ]);
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



    public function deleteMA( AppHasMA $id) : Response

    {      
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        
        //   dd($id) ;
            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');

         
     //  dd($idMa);
       $idl=$id->getId();
       //      dd($idd);
        
        $idApp = getSQLSingleAssoc(
            $login,
            $pw,
        "SELECT a.id_apprenti FROM app_has_ma AS a WHERE a.id_ma = $idMa AND a.id = $idl ;");
        // $idApp=$idApp[0]['id_apprenti'];
        //  dd($idApp);
         //$deleteMA = "delete from app_has_ma where id_apprenti=$idApp and id_ma=$idMa";

        
        $doctrine = $this->getDoctrine();
        $entityManager = $doctrine->getManager();
        $entityManager->remove($id);
        $entityManager->flush();

           return new JsonResponse("Maitre d'apprentissage supprimé");

      //  return $this->redirectToRoute('profilOF_APP',  ['user' => $idApp]) ;

        //return $this->redirectToRoute('/profilOF_APP/{$idApp}');
        

        
    }
    
    
}