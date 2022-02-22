<?php

namespace App\Form;

use App\Entity\User;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MonCompteFormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
      
       ->add('email', TextType::class,[
           'disabled' => true,
           'attr' => [
               'placeholder' => 'email',
               'style'=> 'color: white'
           ]
       ])

       ->add('nom', TextType::class,[
           'attr' => [
               'placeholder' => 'nom',
              
           ]
       ])
       ->add('prenom',TextType::class,[
           'disabled' => true,
           'attr' => [
               'placeholder' => 'Prenom',
               'style'=> 'color: white'
           ]
       ])
       ->add('telephone', NumberType::class,[
           'attr' => [
               'placeholder' => 'telephone',
           
           ]
       ])
    
       ->add('adresse',TextType::class,[
           'attr' => [
               'placeholder' => 'adresse',
             
           ]
       ])
        ->add('old_password', PasswordType::class,[
            'label' => false,
            'mapped'=> false,
            'attr'  => [
                'placeholder'=>'Veuillez saisir votre mot de passe actuel'
            ]
        ])
        ->add('new_password', RepeatedType::class, [
            'type'            => PasswordType::class,
            'mapped'          => false,
            'invalid_message' => 'le mot de passe et la confirmation doivent être identique.',
            'label'           => false,
            'required'        => true,
            'first_options'   => [
                'label' => false,
                'attr'  => [
                    'placeholder'=>'Merci de saisir votre nouveau mot de passe.'
                    ]
                ],
            'second_options'    => [
                'label'         => false,
                'attr'          => [
                    'placeholder'=>'Merci de confirmer votre nouveau mot de passe.'
                    ]
                ],
                'attr'            => [
                                    'placeholder' => 'Merci de saisir votre mot de passe'
                                ]
        ])
        ->add('save', SubmitType::class,[
            'label'=> "Enregistrer",
            'attr' => [
                'class' => 'boutonForm'
            ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
