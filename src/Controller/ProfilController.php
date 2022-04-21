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






    public function profilOF_APP(User $user,UserInterface $userInterface, Request $request, SluggerInterface $slugger): Response
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
        "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName, document.date_create AS d_dateCreate
        FROM document, user
        WHERE user.id=document.id_owner AND user.id=".$user->getId());
//   dd($listDoc);

// $listDocbis= [];

// for ($j=0; $j < sizeof($listDoc); $j++) { 
//      array_push($listDocbis,$listDoc[$j]);
//     }  
    //  $listDocter = [];
    // for ($k=0; $k < sizeof($listDocbis) ; $k++) { 
   
    //     array_push($listDocter,convertUserEntity2SQL($login, $pw, $listDocbis[$k]['d_id']) );}


// $idlistdoc = $listDoc[1]['d_id'];
// dd($listDocbis);
        $ma = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, u.prenom, u.telephone, u.id, u.role_string                   
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

        $nameMA = "";
        $nameOF = "";
        $nameFormateur = "";
        $nameApprenti = "";
        $nameEntreprise = "";
        $resMA          = false;
        $resApp         = false;
        $resFormateur   = false;
        $resENT         = false;

        $nameOF = 'FOREACH';


        // if ($roleString == 'ROLE_APP')   //App / MA / ENT / FOR / OF 
        // {
            // $idApp = $user->getId();

            $resMA =  getMAFromApprenti($login, $pw, $id);
            if( $resMA )
            {
                $nameMA = $resMA['prenom'] . " " . $resMA['nom'] . " (MA)";
                $resENT =  getENTFromMA($login, $pw, $resMA['id']);
                if ( $resENT )
                {
                    $resIdSession = getSessionFromApp($login, $pw, $id);
                    if( $resIdSession )
                    {
                        $idSession = $resIdSession['id_session'];
                        $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
                        if ( $resFormateur )
                            $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";
                    }
                }
        
            }
            // dd($);
        // } 
        // else if ($roleString == 'ROLE_MA') // MA / ENT / FOR / OF /App 
        // {
        //     $idMA = $user->getId();
        //     $roleMA = $user->getRoles();

        //     $resApp =  getAppFromMA($login, $pw, $idMA);
        //     $nameApprenti = $resApp['prenom'] . " " . $resApp['nom'] . " (App)";

        //     $resENT =  getENTFromMA($login, $pw, $idMA);
        //     $nameEntreprise = $resENT['nom'] . " (ENT)";

        //     $resIdSession = getSessionFromApp($login, $pw, $resApp['id']);
        //     $idSession = $resIdSession['id_session'];
        //     $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
        //     $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";

        //     $nameMA = '';

        //     $nameOF = 'FOREACH';
        // } 
        // else if ($roleString == 'ROLE_ENT') //  ENT / FOR / OF /App/ MA
        // {
        //     $idEnt = $user->getId();
        //     $roleEnt = $user->getRoles();

        //     $resMA =  getMAFromEnt($login, $pw, $idEnt);
        //     if ( $resMA )
        //     {
        //         $nameMA = $resMA['prenom'] . " " . $resMA['nom'] . " (MA)";
        //         //dd($resMA);

        //         $resApp =  getAppFromMA($login, $pw, $resMA['id']);
        //         if ( $resApp )
        //         {
        //             $nameApprenti = $resApp['prenom'] . " " . $resApp['nom'] . " (App)";
        //             $resIdSession = getSessionFromApp($login, $pw, $resApp['id']);
        //             if ( $resIdSession )
        //             {
        //                 $idSession = $resIdSession['id_session'];
        //                 $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
        //                 $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";
        //             }
        //         }
        //     }
        // } 

        $nameOF = 'FOREACH';




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

                // if( $up->getOFormation() )
                // {
                //     $recipient = new RecipientDocument();
                //     $recipient->setIdDocument( $up->getId());
                //     $recipient->setIdRecipient( getUserFromMail($login, $pw, 'foreach@academy.fr' )['id'] );
                //     $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                // }

                // if( $resMA && $up->getMA() )
                // {
                //     $recipient = new RecipientDocument();
                //     $recipient->setIdDocument( $up->getId());
                //     $recipient->setIdRecipient( $resMA['id'] );
                //     $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                // }

                // if( $resApp && $up->getApprenti() )
                // {
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( $id );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                // }
                // //dd( )
                // if( $resFormateur && $up->getFormateur() )
                // {
                //     foreach ( $resFormateur as $key =>  $for) {
                //         $recipient = new RecipientDocument();
                //         $recipient->setIdDocument( $up->getId());
                //         $recipient->setIdRecipient( $for['id'] );
                //         $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)                    }
                //     }
                // }
                // if( $resENT && $up->getEntreprise() )
                // {
                //     $recipient = new RecipientDocument();
                //     $recipient->setIdDocument( $up->getId());
                //     $recipient->setIdRecipient( $resENT['id'] );
                //     $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                // }
                $entityManager->flush();
                $this->addFlash('message', "Document ajouté");
                //dd( $retour );
      
                    // return $this->redirectToRoute( $retour );
  
                
              
            }
        }


        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'listMa' => $listMa,
            'ma' => $ma,
            'id' => $id,
            'documents' => $listDoc,
            // 'docs' => $listDocbis,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),
            'OF'   => $infoOF,         
            'fonction' => "Apprenti", 
            'listFormateur'=> $listFormateur,
            'entreprise'=>$entreprise,
            'myform'            => $formulaire->createView(),
            'role'              => $roleString,
            'nameOF'            => $nameOF,
            'nameMA'            => $nameMA,
            'nameFormateur'     => $nameFormateur,
            'nameApprenti'      => $nameApprenti,
            'nameEntreprise'    => $nameEntreprise,
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
}