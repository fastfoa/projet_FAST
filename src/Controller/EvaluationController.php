<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evaluation;
use App\Entity\Competence;
use App\Entity\User;
use App\Entity\Session;
use App\Entity\Formation;
use App\Lib\PDOUtil;;
use App\Form\EvaluationType;
use App\Form\EvaluationAppType;
use App\Form\EvaluationFormateurType;
use App\Form\EvaluationMAType;
use App\Form\EvaluationOFType;
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

    function checkRGPD()
    {
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }

    public function saisiEvaluation(Competence $competence, User $app, Session $session, Request $request): Response
    {

        $user = $this->getUser();
       // dd($user);
        $role='';
        if(!empty($user))
        {
        //$role = $user->getRoles()[0];
        $role= $user->getRoleString();

          //dd($role);
        }
    
        $message = false;
        $evaluation = new Evaluation();
       
        $nameCompet = $competence->getName();
        $evaluation->setIdCompetence($competence->getId());
        $evaluation->setIdApp($app->getId());
        $evaluation->setIdMA(1);
        $evaluation->setNote(1);
        $evaluation->setIdFormateur(1);
        $evaluation->setIdSession($session->getId(1));
      
        //dd( $evaluation );
        $type = EvaluationAppType::class;

        if ( $role == "ROLE_APP")
            $type = EvaluationAppType::class;
        else if ( $role == "ROLE_OF")
            $type = EvaluationOFType::class;
        else if ( $role == "ROLE_FORMATEUR")
            $type = EvaluationFormateurType::class;
        else if ( $role == "ROLE_MA")
            $type = EvaluationMAType::class;

        $form = $this->createForm( $type, $evaluation);
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
                'message' => $message,
                'app'=>$app,
                
                
            ]);
    }

    public function choiceCompetence(User $app, Session $session, Request $request): Response
    {
        $formationID = $session->getIdFormation();
        $doctrine = $this->getDoctrine();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
        $formation = $doctrine->getRepository(Formation::class)->find( $formationID );
        $nomFormation = $formation->getNom();
        $list = getSQLArrayAssoc( $login, $pw,
            "SELECT *  
             FROM  competence as c 
             WHERE c.id_formation=$formationID");
        
        $nomAPP= $app->getPrenom()." ".$app->getNom();

        return $this->render('evaluation/choiceCompetence.html.twig', [
            'user' => $app,    
            'session' => $session,    
            'nomFormation' => $nomFormation,    
            'list'=>$list
                
            ]);
    }



}
