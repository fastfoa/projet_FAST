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

    public function saisiEvaluation(Competence $competence, User $app, Request $request): Response
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
        $MA  = convertUserEntity2SQL( $login, $pw, getMAFromApprenti($login, $pw, $app['id'] )['id']);
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

        $login = $this->getParameter('loginDB');
        $pw = $this->getParameter('PasswordDB');
    
        $user = $this->getUser();
        $role = $user->getRoleString();
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
        //dd( $entreprise );
    
        //$resMA = getMAFromEnt($login, $pw, $entreprise->getId() );
        //dd( $resMA );
        //$resApp = getAppFromMA($login, $pw, $resMA['id'] );
        //dd( $resApp );
        //$of = [ 'nom' => 'Vidal', 'prenom' => 'Jean-Philippe'];

        return $this->render(
        'evaluation/dashEval.html.twig', 
        [
            'app' => $app,
            'menu' => getMenuFromRole( $this->getUser()->getRoleString() ),            
            'session' => $session,    
            'nomFormation' => $nomFormation,    
            'listCompetence'=>$listCompetence         
        ]);    
    }
}
