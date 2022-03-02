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
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }

    public function upload(Request $request, SluggerInterface $slugger): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $up = new Document();
        $user = $this->getUser();
        $roleString = $user->getRoleString();
        $formulaire = $this->createForm(DocumentExtType::class, $up);
        $formulaire->handleRequest($request);

            if ($formulaire->isSubmitted() && $formulaire->isValid()) 
            {
                $file = $formulaire->get('fileName')->getData();

                if ($file) 
                {
                    //return new Response( " fichier : $file ");
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $originalExt = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                    //return new Response( " fichier : $originalFilename . $originalExt uploadé ");
                    $fullOrigineFileName = $originalFilename . "." . $originalExt;

                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $originalExt;


                    // Move the file to the directory where brochures are stored


                    try 
                    {
                        $file->move(
                        $this->getParameter('path_upload'),
                        $newFilename
                     );
                    } 
                    catch (FileException $e) 
                    {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $up->setFileName($newFilename);
                    $up->setFileNameOriginal($fullOrigineFileName);
                    $up->setDateCreate(new \DateTime());
                    
                   
                    
                    $doctrine = $this->getDoctrine();
                    $entityManager = $doctrine->getManager();

                    $entityManager->persist($up); // On confie notre entit&#xE9; &#xE0; l'entity manager (on persist l'entit&#xE9;)
                    $entityManager->flush();

                    $this->addFlash('message', "Document ajouté");
                    return $this->redirect('downloadlist');
                   

                    //return $this->redirectToRoute('CVK');

                }
            }
            $login = $this->getParameter('loginDB');
            $pw = $this->getParameter('PasswordDB');
    
            $nameMA = "";
            $nameOF = "";
            $nameFormateur = "";
            $nameApprenti = ""; 
            $nameEntreprise ="";

            if ( $roleString == 'ROLE_APP')
            {
                $resMA =  getMAFromApprenti($login, $pw, $user->getId() );
                $nameMA = $resMA['prenom']." ".$resMA['nom'] ." (MA)"; 

                if ( $nameMA['role_string'] == 'ROLE_IND' )
                $resENT = $nameMA;    
                else
                    $resENT =  getENTFromMA($login, $pw, $resMA['id'] );

                $nameMA = $resMA['prenom']." ".$resMA['nom'] ." (ENT)"; 
            }


            return $this->render('document/upload.html.twig', 
            [
            'myForm' => $formulaire->createView(),
            'nameOF' => $nameOF,
            'nameMA' => $nameMA,
            'nameFormateur' => $nameFormateur,
            'nameApprenti' => $nameApprenti,
            'nameEntreprise' => $nameEntreprise,
            ]);
    }
   
    public function downloadlist(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $doctrine = $this->getDoctrine();
        //$patro = $doctrine->getRepository(Patronyme::class)->find($id);

        $uploads = $doctrine->getRepository(Document::class)->findAll();
        $menu = [
            "Documents"=>"downloadlist",
            ];

        return $this->render(
        'document/downloadlist.html.twig', 
        [
            'listUp' => $uploads,
            'menu' => $menu
        ]);    

    }

    public function download(Document $id): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $file = $this->getParameter('path_upload')."/".$id->getFileName();

        $r = new BinaryFileResponse($file);
        
        $str =  $id->getFileNameOriginal();

        $d = HeaderUtils::makeDisposition(
                            HeaderUtils::DISPOSITION_ATTACHMENT,
                            $str
                        );

        $r->headers->set('Content-Disposition', $d);
        return $r;
    }
    
    public function deletedocument(Document $document )
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
    
        $doctrine = $this->getDoctrine();
        $om = $doctrine->getManager();
        $om->remove($document);
        $om->flush();
        $this->addFlash('message', "Document supprimé");
        return $this->redirectToRoute("downloadlist");
    }

    public function getInfoDoc(User $user )
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $a = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, u.prenom, u.raison_social, u.role_string, d.titre, r.id_document, r.date_read FROM document AS d, recipient_document AS r, user AS u
        WHERE r.id_document=d.id AND u.id=r.id_recipient AND d.id_owner=".$user->getId());

        return new JsonResponse([ "a" => $a]);
    }
}