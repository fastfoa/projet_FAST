<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetMDPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('old_password', PasswordType::class, [
                'required'   => true,
                'mapped' => false,
                'label' => false,
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
                        'placeholder' => 'confirmer votre nouveau mot de passe.'
                    ]
                ]
            ])

            ->add('save2', SubmitType::class, [
                'label' => "Mettre à jour",
                'attr' => [
                    'class' => 'boutonForm'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
