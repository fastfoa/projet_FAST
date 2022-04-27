<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MonCompteAppType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[
            'label'=> false,
            'disabled' => true,
            'attr' => [
                'placeholder' => 'nom',
                'style'=> 'color: grey !important'
            ]
        ])
        ->add('prenom', TextType::class,[
            'label'=> false,
            'disabled' => true,
            'attr' => [
                'placeholder' => 'prenom',
                'style'=> 'color: grey !important'
            ]
        ])
        ->add('email', TextType::class,[
            'disabled' => true,
            'attr' => [ 
                'placeholder' => 'Entrez votre adresse email',
                'style'=> 'color: grey !important'
                ] 
        ])

        ->add('adresse', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'adresse',
                'style'=> 'color: black !important'
            ]
        ])
        ->add('telephone', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'telephone',
                'style'=> 'color: black !important'
            ]
        ])

        
        ->add('RepresentantLegal1', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'Representant Legal 1',
                'style'=> 'color: black !important'
            ]
        ])
        ->add('RepresentantLegal2', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'Representant Legal 2',
                'style'=> 'color: black !important'
            ]
        ])
        ->add('TravailleurHandicape', ChoiceType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'Travailleur Handicape'
            ],
            'choices'  => [
                'OUI' => true,
                'NON' => false,
            ],
        ])
        ->add('SportifHautNiveau', ChoiceType::class,[
            'label'=> 'Sportif de Haut Niveau',
            'choices'  => [
                'OUI' => true,
                'NON' => false,
            ],
            
        ])
        ->add('old_password', PasswordType::class,[
            'required'   => true,
            'mapped'=>false,
            'label'=> false,
            'attr' => [
                'placeholder' => 'Mot de passe actuel'
                
            ] 
        ])
        ->add('new_password', RepeatedType::class, [
            'type' => PasswordType::class,
            'required'   => true,
            'mapped' => false,
            'invalid_message' => 'Le mot de passe et la confirmation doivent être identique.',
            'required' => false,
            'first_options' => [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nouveau mot de passe.'
                ]
            ],
            'second_options' => [
                'required'   => false,
                'label' => false, 
                'attr' => [
                    'placeholder' => 'Merci de confirmer votre nouveau mot de passe.'
                ]
            ]
        ])
        
        ->add('save', SubmitType::class,[
            'label'=> "Enregistrer",
            'attr' => [
                'class' => 'boutonForm'
            ]
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
