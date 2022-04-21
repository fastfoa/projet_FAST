<?php

namespace App\Controller;

use App\Entity\Document;
use App\Entity\RecipientDocument;
use App\Form\DocumentType;
use App\Form\DocumentExtType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use PDO;
use App\Entity\Session;

class DocumentController extends AbstractController
{
    /**
     * @Route("/document", name="document")
     */
    public function index(): Response
    {
        return $this->render('document/index.html.twig', [
            'controller_name' => 'DocumentController',
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

    public function upload( Request $request, SluggerInterface $slugger): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $up = new Document();
        $user = $this->getUser();
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


        if ($roleString == 'ROLE_APP')   //App / MA / ENT / FOR / OF 
        {
            $idApp = $user->getId();

            $resMA =  getMAFromApprenti($login, $pw, $idApp);
            if( $resMA )
            {
                $nameMA = $resMA['prenom'] . " " . $resMA['nom'] . " (MA)";
                $resENT =  getENTFromMA($login, $pw, $resMA['id']);
                if ( $resENT )
                {
                    $resIdSession = getSessionFromApp($login, $pw, $idApp);
                    if( $resIdSession )
                    {
                        $idSession = $resIdSession['id_session'];
                        $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
                        if ( $resFormateur )
                            $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";
                    }
                }
        
            }
        } 
        else if ($roleString == 'ROLE_MA') // MA / ENT / FOR / OF /App 
        {
            $idMA = $user->getId();
            $roleMA = $user->getRoles();

            $resApp =  getAppFromMA($login, $pw, $idMA);
            $nameApprenti = $resApp['prenom'] . " " . $resApp['nom'] . " (App)";

            $resENT =  getENTFromMA($login, $pw, $idMA);
            $nameEntreprise = $resENT['nom'] . " (ENT)";

            $resIdSession = getSessionFromApp($login, $pw, $resApp['id']);
            $idSession = $resIdSession['id_session'];
            $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
            $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";

            $nameMA = '';

            $nameOF = 'FOREACH';
        } 
        else if ($roleString == 'ROLE_ENT') //  ENT / FOR / OF /App/ MA
        {
            $idEnt = $user->getId();
            $roleEnt = $user->getRoles();

            $resMA =  getMAFromEnt($login, $pw, $idEnt);
            if ( $resMA )
            {
                $nameMA = $resMA['prenom'] . " " . $resMA['nom'] . " (MA)";
                //dd($resMA);

                $resApp =  getAppFromMA($login, $pw, $resMA['id']);
                if ( $resApp )
                {
                    $nameApprenti = $resApp['prenom'] . " " . $resApp['nom'] . " (App)";
                    $resIdSession = getSessionFromApp($login, $pw, $resApp['id']);
                    if ( $resIdSession )
                    {
                        $idSession = $resIdSession['id_session'];
                        $resFormateur = getUsersFromRoleSession($login, $pw, "ROLE_FORMATEUR", $idSession);
                        $nameFormateur = $resFormateur[0]['prenom'] . " " . $resFormateur[0]['nom'] . " (FOR)";
                    }
                }
            }
        } 

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

                if( $up->getOFormation() )
                {
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( getUserFromMail($login, $pw, 'foreach@academy.fr' )['id'] );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                }

                if( $resMA && $up->getMA() )
                {
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( $resMA['id'] );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                }

                if( $resApp && $up->getApprenti() )
                {
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( $resApp['id'] );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                }
                //dd( )
                if( $resFormateur && $up->getFormateur() )
                {
                    foreach ( $resFormateur as $key =>  $for) {
                        $recipient = new RecipientDocument();
                        $recipient->setIdDocument( $up->getId());
                        $recipient->setIdRecipient( $for['id'] );
                        $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)                    }
                    }
                }
                if( $resENT && $up->getEntreprise() )
                {
                    $recipient = new RecipientDocument();
                    $recipient->setIdDocument( $up->getId());
                    $recipient->setIdRecipient( $resENT['id'] );
                    $entityManager->persist($recipient); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)    
                }
                $entityManager->flush();
                $this->addFlash('message', "Document ajouté");
                //dd( $retour );
      
                    // return $this->redirectToRoute( $retour );
  
                
              
            }
        }

        return $this->render(
            'profil/profilOF_APP.html.twig', 
            [

                'myform'            => $formulaire->createView(),
                'role'              => $roleString,
                'nameOF'            => $nameOF,
                'nameMA'            => $nameMA,
                'nameFormateur'     => $nameFormateur,
                'nameApprenti'      => $nameApprenti,
                'nameEntreprise'    => $nameEntreprise,
                'menu'              => getMenuFromRole($this->getUser()->getRoleString()),
            ]
        );
    }

    public function downloadlist(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        //$patro = $doctrine->getRepository(Patronyme::class)->find($id);

        $uploads = $doctrine->getRepository(Document::class)->findAll();

        return $this->render(
            'document/downloadlist.html.twig',
            [
                'listUp' => $uploads,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),

            ]
        );
    }

    public function download(Document $id): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $file = $this->getParameter('path_upload') . "/" . $id->getFileName();
// dd($file);
        $r = new BinaryFileResponse($file);

        $str =  $id->getFileNameOriginal();

        $d = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,$str
        );
// dd($d);
        $r->headers->set('Content-Disposition', $d);
        return $r;
    }

    public function deletedocument( Document $document )
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

          
        $doctrine = $this->getDoctrine();
        $om = $doctrine->getManager();
        $om->remove($document);
        $om->flush();
        $this->addFlash('message', "Document supprimé");
        return $this->redirectToRoute("downloadlist") ;
    }

    public function getInfoDoc(User $user)
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $a = getSQLArrayAssoc(
            $this->getParameter('loginDB'),
            $this->getParameter('PasswordDB'),
            "SELECT u.nom, u.prenom, u.raison_social, u.role_string, d.titre, r.id_document, r.date_read FROM document AS d, recipient_document AS r, user AS u
        WHERE r.id_document=d.id AND u.id=r.id_recipient AND d.id_owner=" . $user->getId()
        );

        return new JsonResponse(["a" => $a]);
    }
}
