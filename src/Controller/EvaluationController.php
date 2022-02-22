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

    public function saisiEvaluation(Competence $competence, User $app, Session $session ): Response
    {   
        $evaluation = new Evaluation();

        $evaluation->setIdCompetence( $competence->getId() );
        $evaluation->setIdApp( $app->getId() );
        $evaluation->setIdSession( $session->getId() );


        $form = $this->createForm(EvaluationType::class, $evaluation);
        $nameCompet = $competence->getName();

        return $this->render('evaluation/saisiEvaluation.html.twig', [
            'form' => $form->createView(),
            'nameCompet'=>$nameCompet

        ]);
    }
}
