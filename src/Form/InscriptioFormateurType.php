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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InscriptioFormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          
          
            ->add('Genre', TextType::class,[
                'attr' => [
                    'placeholder' => 'genre',
                  
                ]
            ])
          
           ->add('email', TextType::class,[
               'attr' => [
                   'placeholder' => 'email',
                 
               ]
           ])
    
           ->add('nom', TextType::class,[
               'attr' => [
                   'placeholder' => 'nom',
                  
               ]
           ])
           ->add('prenom',TextType::class,[
               'attr' => [
                   'placeholder' => 'Prenom',
             
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
      
          
           ->add('diplome',TextType::class,[
               'attr' => [
                   'placeholder' => 'diplome',
                   
                
               ]
           ])
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
            ->add('linkedin',TextType::class,[
                'attr' => [
                    'placeholder' => 'linkedin',
                  
                ]
            ])
            ->add('github',TextType::class,[
                'attr' => [
                    'placeholder' => 'github',
                  
                ]
            ])
            ->add('CV',TextType::class,[
                'attr' => [
                    'placeholder' => 'CV',
                  
                ]
            ])
            ->add('Web',TextType::class,[
                'attr' => [
                    'placeholder' => 'Web',
                  
                ]
            ])
        /*
           ->add('dateNaissance', DateType::class, [
            'widget' => 'single_text',
            'required' => true,
            'label' => false,
            'format' => 'yyyy-MM-dd'
        ])
        */
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
