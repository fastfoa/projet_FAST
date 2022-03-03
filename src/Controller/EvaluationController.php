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

    public function newEvaluation(Competence $competence, User $app, Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
    
        $message = false;
        $type = EvaluationAppType::class;
        $evaluation = new Evaluation();


        $user       = $this->getUser();
        $role       = $user->getRoleString();
        
        $user       = convertUserEntity2SQL( $login, $pw, $user->getId() );
        $app        = convertUserEntity2SQL( $login, $pw, $app->getId() );
        $formateur  = convertUserEntity2SQL( $login, $pw, getFormateursFromApprenti($login, $pw, $app['id'] )[0]['id']);
        $MA         = convertUserEntity2SQL( $login, $pw, getMAFromApprenti($login, $pw, $app['id'] )['id']);
        $OF         = getInfoOF();

        if ( $role == "ROLE_APP" )
        {
            $app = $user;
            $type = EvaluationAppType::class;
        }   
        else if ( $role == "ROLE_MA" )
        {
            $MA = $user;
            $type = EvaluationMAType::class;
        }
        else if ( $role == "ROLE_FORMATEUR" )
        {
            $formateur = $user;
            $type = EvaluationFormateurType::class;
        }
        else
        {
            $user = $OF;
            $type = EvaluationOFType::class;
        }

        $idSession = getIdSessionFromApprenti( $login, $pw, $app['id'] );
        //dd( $session );
        $nameCompet = $competence->getName();
        $evaluation->setIdCompetence($competence->getId());
        $evaluation->setIdApp($app['id']);
        $evaluation->setIdMA($MA['id']);
        $evaluation->setIdFormateur($formateur['id']);
        $evaluation->setIdSession($idSession);
        //$evaluation->setNote(1);
      
        $form = $this->createForm( $type, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            if ( $role == "ROLE_APP" )
            {
                $evaluation->setDateApp( new \DateTime('now') );
            }   
            else if ( $role == "ROLE_MA" )
            {
                $evaluation->setDateMA( new \DateTime('now') );
            }
            else if ( $role == "ROLE_FORMATEUR" )
            {
                $evaluation->setDateFormateur( new \DateTime('now') );
            }
            else
            {
                $evaluation->setDateOF( new \DateTime('now') );
            }
    
            $entityManager->persist($evaluation);
            $entityManager->flush();
            $message = "le formulaire a bien était pris en compte ";
        }

        return $this->render('evaluation/saisiEvaluation.html.twig', [
                'MA' => $MA,
                'OF' => $OF,
                'formateur' => $formateur,
                'app'=>$app,
                
                'form' => $form->createView(),
                'nameCompet' => $nameCompet,
                'message' => $message,
                'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            ]);
    }

    public function editEvaluation(Evaluation $eval, Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $login  = $this->getParameter('loginDB');
        $pw     = $this->getParameter('PasswordDB');
    
        $message    = false;
        $type       = EvaluationAppType::class;
 
        $user       = $this->getUser();
        $role       = $user->getRoleString();
        
        $user       = convertUserEntity2SQL( $login, $pw, $user->getId() );
        $app        = convertUserEntity2SQL( $login, $pw, $eval->getIdApp() );
        $formateur  = convertUserEntity2SQL( $login, $pw, $eval->getIdFormateur() );
        $MA         = convertUserEntity2SQL( $login, $pw, $eval->getIdMA() );
        $OF         = getInfoOF();


        if ( $role == "ROLE_APP" )
        {
            $app = $user;
            $type = EvaluationAppType::class;
        }   
        else if ( $role == "ROLE_MA" )
        {
            $MA = $user;
            $type = EvaluationMAType::class;
        }
        else if ( $role == "ROLE_FORMATEUR" )
        {
            $formateur = $user;
            $type = EvaluationFormateurType::class;
        }
        else
        {
            $user = $OF;
            $type = EvaluationOFType::class;
        }

        $idSession  = getIdSessionFromApprenti( $login, $pw, $app['id'] );
        $nameCompet = $competence->getName();
      
        $form = $this->createForm( $type, $eval);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();

            if ( $role == "ROLE_APP" )
            {
                $eval->setDateApp( new \DateTime('now') );
            }   
            else if ( $role == "ROLE_MA" )
            {
                $eval->setDateMA( new \DateTime('now') );
            }
            else if ( $role == "ROLE_FORMATEUR" )
            {
                $eval->setDateFormateur( new \DateTime('now') );
            }
            else
            {
                $eval->setDateOF( new \DateTime('now') );
            }
    
            $entityManager->persist($eval);
            $entityManager->flush();
            $message = "le formulaire a bien était pris en compte ";
        }

        return $this->render('evaluation/saisiEvaluation.html.twig', [
                'MA'        => $MA,
                'OF'        => $OF,
                'formateur' => $formateur,
                'app'       => $app,
                'form'      => $form->createView(),
                'nameCompet'=> $nameCompet,
                'message'   => $message,
                'menu'      => getMenuFromRole( $this->getUser()->getRoleString() ),            
            ]);
    }





    public function choiceCompetence(User $app, Session $session, Request $request): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');

        $formationID = $session->getIdFormation();
        $doctrine = $this->getDoctrine();
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
        $formation = $doctrine->getRepository(Formation::class)->find( $formationID );
        $nomFormation = $formation->getNom();
        $listCompetence = getSQLArrayAssoc( $login, $pw,
            "SELECT *  
             FROM  competence as c 
             WHERE c.id_formation=$formationID");
        
        return $this->render('evaluation/choiceCompetence.html.twig', [
            'user' => $app,    
            'session' => $session,    
            'nomFormation' => $nomFormation,    
            'listCompetence'=>$listCompetence,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),
            ]);
    }

    public function dashEval( User $app, Session $session ): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        $user   = $this->getUser();
        $uid    = $user->getId();
        $role   = $user->getRoleString();

        $where="";
        if ( $role == "ROLE_APP" )
        {
            $app = $user;
            $where = " AND id_app = '$uid' ";
        }   
        else if ( $role == "ROLE_MA" )
        {
            $where = " AND id_ma = '$uid' ";
        }
        else if ( $role == "ROLE_FORMATEUR" )
        {
            $where = " AND id_formatuer = '$uid' ";
        }
        else
        {
            $where = " AND id_of = '$uid' ";
        }
        $where="";
    
        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
    
        $formationID = $session->getIdFormation();

        $doctrine = $this->getDoctrine();
        $formation = $doctrine->getRepository(Formation::class)->find( $formationID );
        $nomFormation = $formation->getNom();

        $listCompetence = getSQLArrayAssoc( $login, $pw,
            "SELECT *  
             FROM  competence as c 
             WHERE c.id_formation='$formationID'");



        $listEvalEnCours = getSQLArrayAssoc( $login, $pw,  
            "SELECT DISTINCT e.id_competence AS id, c.name 
            FROM evaluation AS e, competence AS c 
            WHERE e.id_competence=c.id 
            AND  e.id IN (SELECT DISTINCT id FROM evaluation 
                        WHERE e.date_of IS NULL 
                        OR e.date_formateur IS NULL 
                        OR e.date_app IS NULL 
                        OR e.date_MA IS NULL $where)");
            
            
        $listEvalFinies = getSQLArrayAssoc( $login, $pw,  
            "SELECT DISTINCT e.id_competence AS id, c.name 
            FROM evaluation AS e, competence AS c 
            WHERE e.id_competence=c.id 
            AND  e.id IN (SELECT DISTINCT id FROM evaluation 
                        WHERE e.date_of IS NOT NULL 
                        AND   e.date_formateur IS NOT NULL 
                        AND   e.date_app IS NOT NULL 
                        AND   e.date_MA IS NOT NULL $where)");
            
            
        return $this->render(
        'evaluation/dashEval.html.twig', 
        [
            'app'               => $app,
            'menu'              => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'session'           => $session,    
            'nomFormation'      => $nomFormation,    
            'listCompetence'    => $listCompetence,
            'listEvalEnCours'   => $listEvalEnCours,
            'listEvalFinies'    => $listEvalFinies         
        ]);    
    }
}
