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
use Symfony\Component\HttpFoundation\Request;





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
        $message = false;
        $evaluation = new Evaluation();
       
        $nameCompet = $competence->getName();
        $evaluation->setIdCompetence($competence->getId());
        $evaluation->setIdApp($app->getId());
        $evaluation->setIdMA(1);
        $evaluation->setIdFormateur(1);
        $evaluation->setIdSession($session->getId(1));

        $form = $this->createForm(EvaluationType::class, $evaluation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($evaluation);
            $entityManager->flush();
            $message = "le formulaire a bien était pris en compte ";
            
        }

        return $this->render('evaluation/saisiEvaluation.html.twig', [
                'form' => $form->createView(),
                'nameCompet' => $nameCompet,
                'message' => $message
            ]);
        
    }
}
