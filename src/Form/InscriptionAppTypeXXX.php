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

class InscriptionAppTypex extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            
            ->add('prenom',TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'prenom',
                    'class' => 'dat'
                ]
            ])  
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'date',
                    'type' => 'text',
                    'onfocusout' => "(this.type='text')",
                    'onfocus' => "(this.type='date')"
                    
                ],
                'label' => false,
                'format' => 'yyyy-MM-dd'
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
            ->add('linkedin', TextType::class,[
                'class' => 'App\Entity\User',
                'label'=> false,
                'attr' => [
                    'placeholder' => 'linkedin'
                ]
            ])
            ->add('cv', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Cv'
                ]
            ])
            ->add('github', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'github'
                ]
            ])
            
            ->add('web', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Web'
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
