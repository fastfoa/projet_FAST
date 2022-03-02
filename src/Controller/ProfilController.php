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
        $user = $this->getUser();
        if ( $user == null )
           return $this->redirectToRoute( "login" );
         if ( !$user->getRGPDOK())
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

        $listDoc = getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT document.id AS d_id, document.titre AS d_titre, document.file_name AS d_fileName
        FROM document, user
        WHERE user.id=document.id_owner AND user.id=".$user->getId());

        $docSend =  getSQLArrayAssoc($this->getParameter('loginDB'), $this->getParameter('PasswordDB'),
        "SELECT u.nom, d.titre, r.id_document, r.date_read FROM document AS d, recipient_document AS r, user AS u
        WHERE r.id_document=d.id AND u.id=r.id_recipient AND d.id_owner=".$user->getId());

        $id = $user->getId();
        if ( $roleViewer ==  'ROLE_OF' )
        {
                 if ($roleTarget == 'ROLE_APP')
                        return $this->profilOF_APP($user, $id, $listDoc, $docSend);
            else if ($roleTarget == 'ROLE_FORMATEUR')
                        return $this->profilOF_Formateur($user, $id, $listDoc, $docSend);
            else if ($roleTarget == 'ROLE_MA')
                        return  $this->profilOF_MA($user, $id, $listDoc, $docSend);
            else if ($roleTarget == 'ROLE_ENT')
                       return $this->profilOF_Entreprise($user, $id, $listDoc, $docSend);
        }
    }

    // Organisme de Formation regarde les infos de :    
    // l'apprenti 
    public function profilOF_APP(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        //dd( $user );
        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'docSend' => $docSend,
            'fonction' => "Apprenti"        
        ]);
    }    
    // formateur
    public function profilOF_Formateur(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Formateur.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Formateur"        
        ]);
    }       
    // maitre d'apprentissage
    public function profilOF_MA(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_MA.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Maître d'Apprentissage"        
        ]);
    }    
    // l'entreprise
    public function profilOF_Entreprise(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilOF_Entreprise.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Entreprise"        
        ]);
    }
    
    // L'Apprenti regarde les infos de:
    // l'OF
    public function profilAPP_OF(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Organisme de Formation"        
        ]);
    }
    // formateur
    public function profilAPP_Formateur(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Formateur.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'docSend' => $docSend,
            'fonction' => "Formateur"        
        ]);
    }
    // maître d'apprentissage 
    public function profilAPP_MA(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_MA.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Maître d'apprentissage"        
        ]);
    }
    // l'entreprise
    public function profilAPP_Entreprise(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilAPP_Entreprise.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'docSend' => $docSend,
            'id' => $id,
            'fonction' => "Entreprise"        
        ]);
    }

    // Le Formateur regarde les infos de :
    //l'OF
    public function profilFOR_OF(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Organisme de formation"        
        ]);
    }        
    // l'apprenti
    public function profilFOR_APP(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilFOR_APP.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'docSend' => $docSend,
            'id' => $id,
            'fonction' => "Apprenti"        
        ]);
    }
    // maître d'apprentissage
    public function profilFOR_MA(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_MA.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'id' => $id,
             'docSend' => $docSend,
             'fonction' => "Maître d'apprentissage"
         ]);
    }
    // l'entreprise
    public function profilFOR_Entreprise(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilFOR_Entreprise.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'id' => $id,
             'docSend' => $docSend,
             'fonction' => "Entreprise"
         ]);
    }

    // maître d'apprentissage regarde les infos de :
    // l'OF
    public function profilMA_OF(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_OF.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'docSend' => $docSend,
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilMA_APP(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilMA_APP.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'docSend' => $docSend,
            'id' => $id,
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilMA_FOR(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilMA_FOR.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'docSend' => $docSend,
             'id' => $id,
             'fonction' => "Formateur"
         ]);
    } 

        // L'entreprise regarde les infos de :
    // l'OF
    public function profilENT_OF(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_OF.html.twig', 
        [
            'user' => $user,
            'document' => $listDoc,
            'id' => $id,
            'docSend' => $docSend,
            'fonction' => "Organisme de formation"        
        ]);
    }         
    // l'apprenti
    public function profilENT_APP(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
        return $this->render('profil/profilENT_APP.html.twig', 
        [
            'user' => $user,
            'id' => $id,
            'document' => $listDoc,
            'docSend' => $docSend,
            'fonction' => "Apprenti"        
        ]);
    } 
    // Formateur
    public function profilENT_FOR(User $user, $id, $listDoc, $docSend): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;
            
         return $this->render('profil/profilENT_FOR.html.twig', 
         [
             'user' => $user,
             'document' => $listDoc,
             'id' => $id,
             'docSend' => $docSend,
             'fonction' => "Formateur"
         ]);
    } 
  
     
}
