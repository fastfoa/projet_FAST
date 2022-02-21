<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            ->add('post', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre adresse' ] ]
                )
            ->add('telephone', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre numéro de téléphone' ] ]
                )
            ->add('linkedin', TextType::class,
                [ 'attr' => [ 'placeholder' => 'Entrez votre adrees linkedin' ] ]
                )  
            ->add('github', TextType::class,
                [ 'attr' => [ 'placeholder' => 'Entrez votre adrees github' ] ]
                )  
            ->add('Web', TextType::class,
                [ 'attr' => [ 'placeholder' => 'Entrez votre adrees web' ] ]
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
    
                ->add('save', SubmitType::class,
                    [ 'label' => "Enregistrer", 'attr' => [ 'class' => "boutonForm" ] ]
                );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
