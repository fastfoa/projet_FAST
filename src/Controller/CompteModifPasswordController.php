<?php

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
    /**
     * @Route("modifier_mon_password", name="compte_modif_password")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        $notification = null;
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $old_pwd= $form->get('old_password')->getData();

            if ($encoder->isPasswordValid($user, $old_pwd)) {
                $new_pwd= $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user, $new_pwd);

                $user->setPassword($password);
                $this->entityManager->flush();
                $notification = "Votre mot de passe a bien été mis à jour.";
            }
            else{
                $notification= "votre mot de passe actuel n'est pas le bon ";
            }            
        }
        return $this->render('compte/compte_modif_password.html.twig',[
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
