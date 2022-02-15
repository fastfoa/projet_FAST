<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evaluation;
use App\Form\EvaluationType;
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

    public function formulaireEvaluation(Request $request): Response
    {



        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            $entityManager->persist($evaluation); 
            $entityManager->flush();

            $this->addFlash('message', "Document ajouté");
           // return $this->redirect('downloadlist');
        }

        return $this->render('Skills/formulaireEvaluation.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
