<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionAppType extends AbstractType
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
            ->add('prenom',TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'prenom',
                    'class' => 'dat'
                ]
            ])
            ->add('dateNaissance', DateType::class,[
                'label'=> "Date de Naissance",
                'attr' => [
                    'placeholder' => 'date de Naissance',
                    'class' => 'dat date'
                ]
            ])
            ->add('adresse',TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'adress',
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
