<?php

namespace App\Controller;



use App\Entity\AppHasMA;
use App\Entity\Document;
use App\Entity\RecipientDocument;
use App\Entity\User;
use App\Form\DocumentExtType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;








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






    public function profilOF_APP(User $user  , Request $request, SluggerInterface $slugger)
    { 
        //dd($user);
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
           
            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');

        //$aut = $this->getUser();
        //$roleViewer = $aut->getRoles()[0];
      
        $listFormateur=[];    
        $id = $user->getId();
        //    dd($id);
     
       
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

        $up = new Document();
        $user = $user;
        $roleString = $user->getRoleString();

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
                $listDoc = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
                "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName, document.date_create AS d_dateCreate
                FROM document, user
                WHERE user.id=document.id_owner AND user.id=".$user->getId());
            }
        }


        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user'      => $user,
            'listMa'    => $listMa,
            'ma'        => $ma,
            'id'        => $id,
            'documents' => $listDoc,
            'menu'      => getMenuFromRole( $this->getUser()->getRoleString() ),
            'OF'        => $infoOF,         
            'fonction'  => "Apprenti", 
            'listFormateur'=> $listFormateur,
            'entreprise'=>$entreprise,

            'myform'    => $formulaire->createView(),
            'role'      => $roleString,

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
        $entity =  getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT *  FROM app_has_ma WHERE id_apprenti=$id and id_ma=$idMa");
         
         if ($entity == null || sizeof($entity)==0){
            $entityManager->persist($r);
            $entityManager->flush();
        }
        

        return new JsonResponse("Maitre d'apprentissage enregistré");
    }



    public function deleteMA( AppHasMA $id, User $idMa): Response

    {     
      
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;


        // dd($idMa);
        //   dd($id) ;
            $login  = $this->getParameter('loginDB');
            $pw     = $this->getParameter('PasswordDB');

           
     //  dd($idMa);
       $idl=$id->getId();
       $idMa=$idMa->getId();
    //    $id = $user->getId();
    //    $idApp= $idApp->getId();
        // dd($idl); renvoie la ligne
        
            $idApp = getSQLSingleAssoc(
                $login,
                $pw,
            "SELECT a.id_apprenti FROM app_has_ma AS a WHERE a.id_ma = $idMa AND a.id = $idl ;");

         $idApp=$idApp['id_apprenti'];
        //  dd($idApp);
         //$deleteMA = "delete from app_has_ma where id_apprenti=$idApp and id_ma=$idMa";

        

        $doctrine = $this->getDoctrine();
        $entityManager = $doctrine->getManager();
        $entityManager->remove($id);
        $entityManager->flush();

          // return new JsonResponse("Maitre d'apprentissage supprimé");

        return $this->redirectToRoute('profilOF_APP',  ['user' => $idApp]) ;

        //return $this->redirectToRoute('/profilOF_APP/{$idApp}');
        

        
    }
    
    
}