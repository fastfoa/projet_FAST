<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',  Null, [
                'attr' => [
                    'placeholder' => "email",
           
                ]
            ],)
            ->add('password',  Null, [
               
                'attr' => [
                    'placeholder' => "password",
                    
                        ]
            ],)
            ->add('nom',  Null, [
                'attr' => [
                    'placeholder' => "nom",
          
                ]
            ],)
            ->add('prenom',  Null, [
                'attr' => [
                    'placeholder' => "prenom",
               
                ]
            ],)
            ->add('dateNaissance', DateType::class, [
                 
                    'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \DateTime(), 
            ],)
            ->add('adresse',  Null, [
                'attr' => [ 'placeholder' => "adresse",

                ]
            ],)
            ->add('session',  Null, [
                'attr' => [
                    'placeholder' => "session",
                 
                ]
            ],)
            ->add('telephone',  Null, [
                'attr' => [
                    'placeholder' => "telephone",
               
                ]
            ],)
            ->add('siret',  Null, [
                'attr' => [
                    'placeholder' => "siret",
  
                ]
            ],)
            ->add('diplome',  Null, [

                'attr' => [
                    'placeholder' => "diplome",
                   
                ]
            ],)
            ->add('publier', SubmitType::class, [
                'label' => 'Valider',
                'attr' => ['class' => 'boutonForm'],
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
