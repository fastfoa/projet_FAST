<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evaluation;
use App\Entity\Competences;
use App\Form\EvaluationType;
use App\Entity\Compet;
use App\Form\CompetType;
use App\Form\Compet2Type;
use Symfony\Component\HttpFoundation\Request;

class SkillsController extends AbstractController
{
    /**
     * @Route("/skills", name="skills")
     */
    public function index(): Response
    {
        return $this->render('skills/index.html.twig', [
            'controller_name' => 'SkillsController',
        ]);
    }

    public function suiviCompetences(): Response
    {
        return $this->render('Skills/suiviCompetences.html.twig', [
            'controller_name' => 'SkillsController',
        ]);
    }

    public function tableauSuiviCompetences(): Response
    {
        return $this->render('Skills/tableauSuiviCompetences.html.twig', [
            'controller_name' => 'SkillsController',
        ]);
    }

    public function formulaireEvaluation(Request $request, Session $session, Competences $competence, User $app, User $MA, User $formateur ): Response
    {
        $evaluation = new Evaluation();
      
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $rem = $evaluation->getRemarqueMS();
            $evaluation->setSessionID(  $session->getId() );
            $evaluation->setAppID(  $app->getId() );
            $evaluation->setFormateurID(  $formateur->getId() );
            $evaluation->setMAID(  $MA->getId() );

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($evaluation); 
            $entityManager->flush();

           return new Response( "rem : ");
        }

        return $this->render('Skills/formulaireEvaluation.html.twig', [
            'form' => $form->createView(),
            'nameCompet' => $competence->getName(),
            'nameApp' => $app->getNom(),
            'nameSession' => $session->getName(),

        ]);
    }

    public function formulaireEvaluationr(Request $request, Competences $competence): Response
    {
        $nameCompet = $competence->getCompetence();
        $evaluation = new Compet();
        //$evaluation->setCcc($competence);
        $evaluation->setCcc($competence->getId());


        $form = $this->createForm(Compet2Type::class, $evaluation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $rem = $evaluation->getR1();

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($evaluation); 
            $entityManager->flush();

            $this->addFlash('message', "Document ajouté");
           // return $this->redirect('downloadlist');
           return new Response( "rem : $rem ");
        }

        return $this->render('Skills/formulaireEvaluationr.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
