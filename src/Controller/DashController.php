<?php

namespace App\Controller;

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
       

        return $this->render(
        'dash/dashOFPrincipal.html.twig', 
        [
            'listSession' => $listSession
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
            "sessions" => 'dashOFPrincipal',

        ];
        return $this->render('dash/addSession.html.twig', [
            'form' => $form->createView(),
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
       
        return $this->render(
        'dash/dashOFSession.html.twig', 
        [
            'session' => $session
        ]);    
    }

    public function listApprenti(): Response
    {
        $doctrine = $this->getDoctrine();
        $list = $doctrine->getRepository(User::class)->findAll();
       

        return $this->render(
        'dash/listApprenti.html.twig', 
        [
            'list' => $list
        ]);    
    }


}
