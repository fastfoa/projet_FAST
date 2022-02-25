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

        function filtreForm($form, $contact)
        {
            $new_email = $form->get('email')->getData();
            $new_email = strip_tags($new_email);
            $contact->setEmail($new_email);

            //enregistrer la nouvelle adresse
            $new_adresse = $form->get('adresse')->getData();
            $new_adresse = strip_tags($new_adresse);
            $contact->setAdresse($new_adresse);

            //enregistrer le nouveaux telephone
            $new_telephone = $form->get('telephone')->getData();
            $new_telephone = strip_tags($new_telephone);
            $contact->setTelephone($new_telephone);

            //enregistrer le nouveaux new_RepresentantLegal1
            $new_RepresentantLegal1 = $form->get('RepresentantLegal1')->getData();
            $new_RepresentantLegal1 = strip_tags($new_RepresentantLegal1);
            $contact->setRepresentantLegal1($new_RepresentantLegal1);

            //enregistrer le nouveaux new_RepresentantLegal2
            $new_RepresentantLegal2 = $form->get('RepresentantLegal2')->getData();
            $new_RepresentantLegal2 = strip_tags($new_RepresentantLegal2);
            $contact->setRepresentantLegal2($new_RepresentantLegal2);

            //enregistrer le nouveaux tavailleurhadicapé
            $new_TravailleurHandicape = $form->get('TravailleurHandicape')->getData();
            $new_TravailleurHandicape = strip_tags($new_TravailleurHandicape);
            $contact->setTravailleurHandicape($new_TravailleurHandicape);

            //enregistrer le nouveaux SportifHautNiveau
            $new_SportifHautNiveau = $form->get('SportifHautNiveau')->getData();
            $new_SportifHautNiveau = strip_tags($new_SportifHautNiveau);
            $contact->setSportifHautNiveau($new_SportifHautNiveau);


            //enregistrer le nouveaux Effectif
            $new_Effectif = $form->get('Effectif')->getData();
            $new_Effectif = strip_tags($new_Effectif);
            $contact->setEffectif($new_Effectif);

            //enregistrer le nouveaux Public|| Public
            $new_EmployeurPublic = $form->get('EmployeurPublic')->getData();
            $new_EmployeurPublic = strip_tags($new_EmployeurPublic);
            $contact->setEmployeurPublic($new_EmployeurPublic);

            //enregistrer le nom nouveaux prenom
            $new_prenom = $form->get('prenom')->getData();
            $new_prenom = strip_tags($new_prenom);
            $contact->setPrenom($new_prenom);

            //enregistrer le nouveaux telephone
            $new_telephone = $form->get('telephone')->getData();
            $new_telephone = strip_tags($new_telephone);
            $contact->setTelephone($new_telephone);

            //enregistrer le nom nouveaux nom
            $new_nom = $form->get('nom')->getData();
            $new_nom = strip_tags($new_nom);
            $contact->setNom($new_nom);

            return $contact;
        }


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
