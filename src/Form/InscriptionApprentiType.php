<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionApprentiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('session')
            ->add('telephone')
            ->add('diplome')
            ->add('DateNaissance')
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
