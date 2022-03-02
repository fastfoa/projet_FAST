<?php

namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class EvaluationMAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder   
            
            ->add('remarqueMA',TextareaType::class,[
                
                'label'=> false,
                'attr' => [
                    'placeholder' => 'remarque Maitre d\'apprentissage'    
                ]
            ])
            ->add('remarqueAPP',TextareaType::class,[
                'disabled'=>true,
                'label'=> false,
                'attr' => [
                    'placeholder' => 'remarque Apprenti'    
                ]
            ])  
            ->add('remarqueFormateur',TextareaType::class,[
                'disabled'=>true,
                'label'=> false,
                'attr' => [
                    'placeholder' => 'remarque Formateur'    
                ]
            ])
            ->add('remarqueOF',TextareaType::class,[
                'disabled'=>true,
                'label'=> false,
                'attr' => [
                    'placeholder' => 'remarque OF'    
                ]
            ])

            
            
            
           ->add('Enregistrer', SubmitType::class,[
                'attr' => [
                    'class' => 'boutonForm'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
