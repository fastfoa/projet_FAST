<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    function checkRGPD()
    {
    //dd( $t );
    $rgpd = $this->getUser()->getRGPDOK();

    if (!$rgpd)
        return $this->redirectToRoute( "rgpdForm" );
    return null;
    }

    public function editUser( User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        //$aut = $this->getUser();
        //$roleViewer = $aut->getRoles()[0];
        $roleViewer = 'ROLE_OF';
        $roleTarget = $user->getRoleString();

        //$user = $user->getId();
        if ( $roleViewer ==  'ROLE_OF' )
        {
                 if ($roleTarget == 'ROLE_APP')
                        return $this->profilOF_APP($user);
            else if ($roleTarget == 'ROLE_FORMATEUR')
                        return $this->profilOF_Formateur($user);
            else if ($roleTarget == 'ROLE_MA')
                        return  $this->profilOF_MA($user);
            else if ($roleTarget == 'ROLE_ENT')
                       return $this->profilOF_Entreprise($user);
        }
    }



    // Organisme de Formation regarde les infos de :    
    // l'apprenti 
    public function profilOF_APP(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        //dd( $user );
        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'fonction' => "Apprenti"        
        ]);
    }    
    // formateur
    public function profilOF_Formateur(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Formateur.html.twig', 
        [
            'user' => $user,
            'fonction' => "Formateur"        
        ]);
    }       
    // maitre d'apprentissage
    public function profilOF_MA(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_MA.html.twig', 
        [
            'user' => $user,
            'fonction' => "Maître d'Apprentissage"        
        ]);
    }    
    // l'entreprise
    public function profilOF_Entreprise(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Entreprise.html.twig', 
        [
            'user' => $user,
            'fonction' => "Entreprise"        
        ]);
    }
    
    // L'Apprenti regarde les infos de:
    // l'OF
    public function profilAPP_OF(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_OF.html.twig', 
        [
            'user' => $user,
            'fonction' => "Organisme de Formation"        
        ]);
    }
    // formateur
    public function profilAPP_Formateur(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Formateur.html.twig', 
        [
            'user' => $user,
            'fonction' => "Formateur"        
        ]);
    }
    // maître d'apprentissage 
    public function profilAPP_MA(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_MA.html.twig', 
        [
            'user' => $user,
            'fonction' => "Maître d'apprentissage"        
        ]);
    }
    // l'entreprise
    public function profilAPP_Entreprise(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Entreprise.html.twig', 
        [
            'user' => $user,
            'fonction' => "Entreprise"        
        ]);
    }

    // Le Formateur regarde les infos de :
    //l'OF
    public function profilFOR_OF(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_OF.html.twig', 
        [
            'user' => $user,
            'fonction' => "Organisme de formation"        
        ]);
    }        
    // l'apprenti
    public function profilFOR_APP(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_APP.html.twig', 
        [
            'user' => $user,
            'fonction' => "Apprenti"        
        ]);
    }
    // maître d'apprentissage
    public function profilFOR_MA(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_MA.html.twig', 
         [
             'user' => $user,
             'fonction' => "Maître d'apprentissage"
         ]);
    }
    // l'entreprise
    public function profilFOR_Entreprise(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_Entreprise.html.twig', 
         [
             'user' => $user,
             'fonction' => "Entreprise"
         ]);
    }

    // maître d'apprentissage regarde les infos de :
    // l'OF
    public function profilMA_OF(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_OF.html.twig', 
        [
            'user' => $user,
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilMA_APP(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_APP.html.twig', 
        [
            'user' => $user,
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilMA_FOR(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilMA_FOR.html.twig', 
         [
             'user' => $user,
             'fonction' => "Formateur"
         ]);
    } 

        // L'entreprise regarde les infos de :
    // l'OF
    public function profilENT_OF(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_OF.html.twig', 
        [
            'user' => $user,
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilENT_APP(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_APP.html.twig', 
        [
            'user' => $user,
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilENT_FOR(User $user): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilENT_FOR.html.twig', 
         [
             'user' => $user,
             'fonction' => "Formateur"
         ]);
    } 
  
     
}
