<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RGPDType;

class RGPDController extends AbstractController
{
    /**
     * @Route("/r/g/p/d", name="r_g_p_d")
     */
    public function index(): Response
    {
        return $this->render('rgpd/index.html.twig', [
            'controller_name' => 'RGPDController',
        ]);
    }

    
    public function rgpdForm(Request $request): Response
    {
        $user = $this->getUser();
        $id = $user->getId();
        $email = $user->getEmail();
        $rgpd = $user->getRGPDOK();
        $role = $user->getRoles(); 
        

            if ($rgpd) 
            {
                if ($role == 'ROLE_ADMIN')
                {
                    return $this->redirectToRoute('dashOFPrincipal');
                }
                    elseif ($role == 'ROLE_APP') {
                        return $this->redirectToRoute('dashOFPrincipal');
                    }
                    elseif ($role == 'ROLE_ENT') {
                        return $this->redirectToRoute('dashOFPrincipal');
                    }
                    elseif ($role == 'ROLE_OF') {
                        return $this->redirectToRoute('dashOFPrincipal');
                    }
                    elseif ($role == 'ROLE_FORMATEUR') {
                        return $this->redirectToRoute('dashOFPrincipal');
                    }
                    else //  ($role == 'ROLE_MA') 
                    {
                        return $this->redirectToRoute('dashOFPrincipal');
                    }
            }

            else 
            {
                $formulaire = $this->createForm(RGPDType::class, $user);
                $formulaire->handleRequest($request);
        
                    if ($formulaire->isSubmitted() && $formulaire->isValid()) 
                    {
                        $RGPD = $formulaire->get('RGPDOK')->getData(); 
                        if ($RGPD == false) 
                        {
                            return $this->redirectToRoute('login');
                        

                        } else {
                            $user->setRGPDOK(true);
                            $doctrine = $this->getDoctrine();
                            $entityManager = $doctrine->getManager();
                            $entityManager->persist($user);
                            $entityManager->flush();
                            return $this->redirectToRoute('dashOFPrincipal');
                        }
                    }
                return $this->render('rgpd/rgpdForm.html.twig', 
                [
                'id' => $id,
                'myForm' => $formulaire->createView(), 
                ]);
            }
    
    }

    public function rgpdIsOk(Request $request): Response
    {
                
        
        
                $user = $this->getUser();
        
                $user->setRGPDOK(true);
                $doctrine = $this->getDoctrine();
                $entityManager = $doctrine->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('dashOFPrincipal');

    }



    // public function rgpdIsNok(Request $request): Response
    
}
