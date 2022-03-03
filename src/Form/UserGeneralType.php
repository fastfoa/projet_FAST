<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserGeneralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('adresse')
            ->add('telephone')
            ->add('siret')
            ->add('diplome')
            ->add('NAF')
            ->add('Effectif')
            ->add('ConventionCollective')
            ->add('EmployeurPublic')
            ->add('CodeIDCCConvention')
            ->add('Genre')
            ->add('RepresentantLegal1')
            ->add('RepresentantLegal2')
            ->add('NIR')
            ->add('DepNaissance')
            ->add('CommuneNaissance')
            ->add('Nationalite')
            ->add('RegimeSocial')
            ->add('TravailleurHandicape')
            ->add('SportifHautNiveau')
            ->add('SituationAvantContrat')
            ->add('DernierDiplome')
            ->add('DerniereClasse')
            ->add('DiplomePlusHaut')
            ->add('CFA')
            ->add('DenominationCFAResponsable')
            ->add('NumeroUAICFA')
            ->add('DiplomeVise')
            ->add('IntitulePreciDiplomevise')
            ->add('linkedin')
            ->add('github')
            ->add('fonctionMA')
            ->add('posteApp')
            ->add('IdDocContratTravail')
            ->add('IdDocConventionStage')
            ->add('IdDocCERFA')
            ->add('siteWebPro')
            ->add('RGPDOK')
            ->add('profilEnabled')
            ->add('RoleString')
            ->add('codePostal')
            ->add('telUrgence1')
            ->add('telUrgence2')
            ->add('RaisonSocial')
            ->add('dateDossierComplet')
            ->add('numeroDepot')
            ->add('dateDecision')
            ->add('numeroAvenant')
            ->add('save', SubmitType::class,[
                'label' => "Enregistrer",
                'attr' => [ 'class' => "boutonForm" ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
