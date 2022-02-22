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

    public function profilOF_APP(User $user): Response
    {
        return $this->render('profil/profilOF_APP.html.twig', 
        [
            'user' => $user,
            'fonction' => "Apprenti"        
        ]);
    }
    
    public function profilOF_Formateur(User $user): Response
    {
        return $this->render('profil/profilOF_Formateur.html.twig', 
        [
            'user' => $user,
            'fonction' => "Formateur"        
        ]);
    }
    
    public function profilOF_MA(User $user): Response
    {
        return $this->render('profil/profilOF_MA.html.twig', 
        [
            'user' => $user,
            'fonction' => "Maître d'Apprentissage"        
        ]);
    }

    public function profilOF_Entreprise(User $user): Response
    {
        return $this->render('profil/profilOF_Entreprise.html.twig', 
        [
            'user' => $user,
            'fonction' => "Entreprise"        
        ]);
    }
    


}
