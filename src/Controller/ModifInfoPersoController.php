<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\MonCompteADMINType;
use App\Form\MonCompteAppType;
use App\Form\MonCompteEntrepriseType;
use App\Form\MonCompteFormateurType;
use App\Form\MonCompteINDType;
use App\Form\MonCompteMAType;
use App\Form\MonCompteOFType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ModifInfoPersoController extends AbstractController
{
    function checkRGPD()
    {
        //dd( $t );
        $rgpd = $this->getUser()->getRGPDOK();

        if (!$rgpd)
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }

    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function modifInfoMonCompte(Request $request ): Response
    {
        $ret = $this->checkRGPD();
        if ($ret) {
            return $ret;
        }

        $notification = null;
        $contact = $this->getUser();

        $role = $contact->getRoleString();

        //dd( $role );
        $type =  null;
        $twig = '';


        if ($role == 'ROLE_APP') {
            $type =  MonCompteAppType::class;
            $twig = 'compte/mon_compte/monCompteApp.html.twig';
            $titre = "Apprenti";
        } elseif ($role == 'ROLE_MA') {
            $type =  MonCompteMAType::class;
            $twig = 'compte/mon_compte/monCompteMA.html.twig';
            $titre = "Maitre d'Apprentissage";
        } elseif ($role == 'ROLE_ENT') {
            $type =  MonCompteEntrepriseType::class;
            $twig = 'compte/mon_compte/monCompteEntreprise.html.twig';
            $titre = "Entreprise";
        } elseif ($role == 'ROLE_FORMATEUR') {
            $type =  MonCompteFormateurType::class;
            $twig = 'compte/mon_compte/monCompteFormateur.html.twig';
            $titre = "Formateur";
        } elseif ($role == 'ROLE_OF') {
            $type =  MonCompteOFType::class;
            $twig = 'compte/mon_compte/monCompteOF.html.twig';
            $titre = "Organisme de Formation";
        } elseif ($role == 'ROLE_IND') {
            $type =  MonCompteINDType::class;
            $twig = 'compte/mon_compte/monCompteIND.html.twig';
            $titre = "Formateur";
        } elseif ($role == 'ROLE_ADMIN') {
            $type =  MonCompteADMINType::class;
            $twig = 'compte/mon_compte/monCompteADMIN.html.twig';
            $titre = "Formateur";
        }
        $form = $this->createForm($type, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            return $this->redirectToRoute('compte');
        }

        
        
        
        return $this->render($twig, [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}


