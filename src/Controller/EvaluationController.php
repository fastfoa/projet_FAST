<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evaluation;
use App\Entity\Competence;
use App\Entity\User;
use App\Entity\Session;
use App\Form\EvaluationType;
use App\Form\EvaluationAppType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;






class EvaluationController extends AbstractController
{
    
    /**
     * @Route("/evaluation", name="evaluation")
     */
    public function index(): Response
    {
        return $this->render('evaluation/index.html.twig', [
            'controller_name' => 'EvaluationController',
        ]);
    }

    public function saisiEvaluation(Competence $competence, User $app, Session $session, Request $request): Response
    {

        $user = $this->getUser();
       // dd($user);
        if(!empty($user))
        {
          $role = $user->getRoles()[0];
          dd($role);
        }
    
        $message = false;
        $evaluation = new Evaluation();
        $nom ="";
       
        $nameCompet = $competence->getName();
        $evaluation->setIdCompetence($competence->getId());
        $evaluation->setIdApp($app->getId());
        $evaluation->setIdMA(1);
        $evaluation->setIdFormateur(1);
        $evaluation->setIdSession($session->getId(1));

        $form = $this->createForm(EvaluationAppType::class, $evaluation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($evaluation);
            $entityManager->flush();
            $message = "le formulaire a bien était pris en compte ";
            $nom = "steeve madeen";
            
        }

        return $this->render('evaluation/saisiEvaluation.html.twig', [
                'form' => $form->createView(),
                'nameCompet' => $nameCompet,
                'message' => $message,
                'nom'=>$nom
                
            ]);
        
    }
}
