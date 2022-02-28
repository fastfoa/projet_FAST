<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MonCompteOFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class,[
                'disabled' => true,
                'attr' => [ 
                'placeholder' => 'Entrez votre adresse email',
                'style'=> 'color: white'
                ] 
            ])
            ->add('nom', TextType::class,[
                'disabled' => true,
                'attr' => [ 
                'placeholder' => 'Entrez votre nom',
                'style'=> 'color: white'
                ]  
            ])
            ->add('prenom', TextType::class,[
                'disabled' => true,
                'attr' => [ 
                'placeholder' => 'Entrez votre prénom',
                'style'=> 'color: white'
                ]  
            ])
            ->add('adresse', TextType::class,
                [ 'attr' => [ 'placeholder' => 'Entrez votre adresse' ] ]
            )
            ->add('telephone', TextType::class,
                [ 'attr' => [ 'placeholder' => 'Entrez votre numéro de téléphone' ] ]
            )
            
            ->add('save', SubmitType::class,[ 
                'label' => "Enregistrer", 
                'attr' => [ 
                    'class' => "boutonForm"
                    ] ]
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
