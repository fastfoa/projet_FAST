<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'email',
                    'class' => 'dat'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Mot de passe',
                    'class' => 'dat'
                ]
            ])
            ->add('nom', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'nom',
                    'class' => 'dat'
                ]
            ])
            
            ->add('telephone', NumberType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'telephone',
                    'class' => 'dat'
                ]
            ])
            ->add('adresse',TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'adress',
                    'class' => 'dat'
                ]
            ])
            ->add('siret',TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'siret',
                    'class' => 'dat'
                ]
            ])
            
            ->add('inscrire', SubmitType::class,[
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
