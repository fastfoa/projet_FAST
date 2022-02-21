<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    public function upload(Request $request, SluggerInterface $slugger): Response
    {
        $up = new Document();
        $formulaire = $this->createForm(DocumentType::class, $up);

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

            return $this->render('document/upload.html.twig', 
            [
            'myForm' => $formulaire->createView(),
            ]);
    }
   
    public function downloadlist(): Response
    {
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
            $doctrine = $this->getDoctrine();
            $om = $doctrine->getManager();
            $om->remove($document);
            $om->flush();
            $this->addFlash('message', "Document supprimé");
            return $this->redirectToRoute("downloadlist");
    }
  
}