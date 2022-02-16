<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptioGeneraleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('session')
            ->add('telephone')
            ->add('siret')
            ->add('diplome')
            ->add('DateNaissance')
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
