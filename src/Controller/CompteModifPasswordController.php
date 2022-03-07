<?php
/*
 controlleur pour modifier c'est information personelle selon la personne qui est connecter

 le 7/03/2022 
 Alexis Santrain 
 alexis.santrain@orange.fr

*/


namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CompteModifPasswordController extends AbstractController
{
    //controle si le rgpd a était valider
    function checkRGPD()
    {
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
            return $this->redirectToRoute( "rgpdForm" );
        return null;
    }
    // construction de entité manager
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        //controle si le rgpd a était valider
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        //recupérer l'utilisateur qui est connecter
        $user = $this->getUser();
        // création du formulaire part a pour au type et a l'utilisateur 
        $form = $this->createForm(ChangePasswordType::class, $user);
        // récupération de la requet envoyer part l'utilisateur 
        $form->handleRequest($request);
        //controle si la requet et bien valider et envoyer 
        if ($form->isSubmitted() && $form->isValid()) {

            // $old_pwd= $form->get('old_password')->getData();

            // if ($encoder->isPasswordValid($user, $old_pwd)) {
            //     $new_pwd= $form->get('new_password')->getData();
            //     $password = $encoder->encodePassword($user, $new_pwd);

            //     $user->setPassword($password);
            //     $this->entityManager->flush();
            //     return $this->redirectToRoute('compte');
            // }
            // else{
            //     $notification= "votre mot de passe actuel n'est pas le bon ";
            // }            
        }

        return $this->render('compte/compte_modif_password.html.twig',[
            'form' => $form->createView()//créer le formulaire en l'envoyer aux twig 
        ]);
    }

    public function compte_modif_password(Request $request){
        //controle si le rgpd a était valider
        $ret = $this->checkRGPD();
        if ($ret) {
            return $ret;
        }
        //recupérer l'utilisateur qui est connecter
        $user = $this->getUser();
        // création du formulaire part a pour au type et a l'utilisateur
        $form = $this->createForm(ChangePasswordType::class, $user);
        // récupération de la requet envoyer part l'utilisateur 
        $form->handleRequest($request);
        //controle si la requet et bien valider et envoyer
        if ($form->isSubmitted()) {
            return $this->redirectToRoute('compte');
        }

        return $this->render('compte/compte_modif_password.html.twig', [
            'form' => $form->createView()//créer le formulaire en l'envoyer aux twig
        ]);
    }
}
