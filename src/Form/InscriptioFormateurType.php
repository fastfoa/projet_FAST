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
                'label'=> false,
                'attr' => [
                    'placeholder' => 'genre',
                  
                ]
            ])
          
           ->add('email', TextType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'email',
                 
               ]
           ])
    
           ->add('nom', TextType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'nom',
                  
               ]
           ])
           ->add('prenom',TextType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'Prenom',
             
               ]
           ])
           ->add('telephone', NumberType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'telephone',
               
               ]
           ])
        
           ->add('adresse',TextType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'adresse',
                 
               ]
           ])
      
          
           ->add('diplome',TextType::class,[
               'label'=> false,
               'attr' => [
                   'placeholder' => 'diplome',
                   
                
               ]
           ])
        //    ->add('dateNaissance', DateType::class, [
        //        'widget' => 'single_text',
        //        'attr' => [
        //            'placeholder' => 'date',
        //            'type' => 'text',
        //            'onfocusout' => "(this.type='text')",
        //            'onfocus' => "(this.type='date')"
                   
        //        ],
        //        'label' => false,
        //        'format' => 'yyyy-MM-dd'
        //    ])
           ->add('dateNaissance', DateType::class, [
            'widget' => 'single_text',
            'required' => true,
            'label' => false,
            'format' => 'yyyy-MM-dd'
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
