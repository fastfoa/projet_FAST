<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Competence;
use App\Form\CompetenceType;
use App\Entity\Evaluation;
use App\Entity\User;
use App\Entity\Session;
use App\Form\EvaluationType;

class CompetenceController extends AbstractController
{
    /**
     * @Route("/competence", name="competence")
     */
    public function index(): Response
    {
        return $this->render('competence/index.html.twig', [
            'controller_name' => 'CompetenceController',
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

        return $this->render('competence/saisiEvaluation.html.twig', [
            'form' => $form->createView(),
            'nameCompet'=>$nameCompet

        ]);
    }
}
