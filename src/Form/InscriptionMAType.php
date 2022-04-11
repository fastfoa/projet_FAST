<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class InscriptionMAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre adresse email' ] ]
                )
            ->add('nom', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre nom' ] ]
                )
            ->add('prenom', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre prénom' ] ]
                )
            ->add('adresse', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre adresse' ] ]
                )
            ->add('telephone', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre numéro de téléphone' ] ]
                )
                ->add('dateNaissance', DateType::class, [
                    'widget' => 'single_text',
                    'attr' => [
                        'placeholder' => 'date naissance',
                        'type' => 'text',
                        'onfocusout' => "(this.type='text')",
                        'onfocus' => "(this.type='date')"
                       
                    ],
                    'label' => false,
                    'format' => 'yyyy-MM-dd'
                ])
                ->add('old_password', PasswordType::class,[
                    'mapped'=>false,
                    'label'=> false,
                    'attr' => [
                        'placeholder' => 'Mot de passe actuel'
                        
                    ] 
                ])
                ->add('new_password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'mapped' => false,
                    'invalid_message' => 'Le mot de passe et la confirmation doivent être identique.',
                    'required' => true,
                    'first_options' => [
                        'label' => false,
                        'attr' => [
                            'placeholder' => 'Merci de saisir votre nouveau mot de passe.'
                        ]
                    ],
                    'second_options' => [
                        'label' => false, 
                        'attr' => [
                            'placeholder' => 'Merci de confirmer votre nouveau mot de passe.'
                        ]
                    ]
                ])
    
            ->add('save', SubmitType::class,
                    [ 'label' => "Enregistrer", 'attr' => [ 'class' => "boutonForm" ] ]
                )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
