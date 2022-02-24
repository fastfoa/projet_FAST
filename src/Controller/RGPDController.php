<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RGPDType;

use App\Entity\User;

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
        $role = $user->getRoles()[0];

        $redirect = "login";

        if ($rgpd) {
            if ($role == 'ROLE_ADMIN') {
                $redirect = 'dashOFPrincipal';
            } elseif ($role == 'ROLE_APP') {
                $redirect = 'dashAPP';
            } elseif ($role == 'ROLE_ENT') {
                $redirect = 'dashEntreprise';
            } elseif ($role == 'ROLE_FORMATEUR') {
                $redirect = 'dashFormateur';
            } elseif ($role == 'ROLE_OF') {
                $redirect = 'dashOFPrincipal';
            } elseif ($role == 'ROLE_MA') {
                $redirect = 'dashMA';
            }
            return $this->redirectToRoute( $redirect);
        } 
        else 
        {
            $formulaire = $this->createForm(RGPDType::class, $user);
            $formulaire->handleRequest($request);

            //dd( $role );

            if ( $formulaire->isSubmitted() ) 
            {
                    $user->setRGPDOK(true);
                    $doctrine = $this->getDoctrine();
                    $entityManager = $doctrine->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    return $this->redirectToRoute( $redirect);
            }
            return $this->render(
                'rgpd/rgpdForm.html.twig',
                [
                    'id' => $id,
                    'myForm' => $formulaire->createView(),
                ]
            );
        }
    }


}
