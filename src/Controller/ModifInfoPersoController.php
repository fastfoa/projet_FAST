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

use App\Lib\Form;

class ModifInfoPersoController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function monCompte(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null;
        $contact = $this->getUser();

        $role = $contact->getRoles()[0];

        //dd( $role );
        $type =  null;
        $twig = ''; 


        if ( $role == 'ROLE_APP')
        {
            $type =  MonCompteAppType::class;
            $twig = 'mon_compte/monCompteApp.html.twig'; 
            $titre = "Apprenti";
        }
        else if ( $role == 'ROLE_MA')
        {
            $type =  MonCompteMAType::class;
            $twig = 'mon_compte/monCompteMA.html.twig'; 
            $titre = "Maitre d'Apprentissage";
        }
        else if ( $role == 'ROLE_ENT')
        {
            $type =  MonCompteEntrepriseType::class;
            $twig = 'mon_compte/monCompteEntreprise.html.twig';
            $titre = "Entreprise";
 
        }
        else if ( $role == 'ROLE_FORMATEUR')
        {
            $type =  MonCompteFormateurType::class;
            $twig = 'mon_compte/monCompteFormateur.html.twig';
            $titre = "Formateur";
        }
        else if ( $role == 'ROLE_OF')
        {
            $type =  MonCompteOFType::class;
            $twig = 'mon_compte/monCompteOF.html.twig';
            $titre = "Organisme de Formation";
        }else if ( $role == 'ROLE_IND')
        {
            $type =  MonCompteINDType::class;
            $twig = 'mon_compte/monCompteIND.html.twig';
            $titre = "Formateur";
        }else if ( $role == 'ROLE_ADMIN')
        {
            $type =  MonCompteADMINType::class;
            $twig = 'mon_compte/monCompteADMIN.html.twig';
            $titre = "Formateur";
        }
        
        

        $form = $this->createForm($type, $contact);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $contact = filtreForm($form, $contact);

            $old_pwd = $form->get('old_password')->getData();
            if ($encoder->isPasswordValid($contact, $old_pwd)) {

                // modification du mot de pass 

                $new_pwd = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($contact, $new_pwd);
                $contact->setPassword($password);
            }

            $this->entityManager->persist($contact);
            $this->entityManager->flush();
            $notification = "Vos information ont  été mis à jour.";
        }
        return $this->render($twig, [
            'form' => $form->createView(),
            'notification' => $notification,
            //'titre' =>   $titre

        ]);
    }

}
