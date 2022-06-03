<?php

namespace App\Form;

use App\Entity\Session;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'nom de la session',
                ]
            ])
            ->add('debut', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime(),
                'attr' => [
                    'placeholder' => 'date de début',
                    'type' => 'text',
                    'onfocusout' => "(this.type='text')",
                    'onfocus' => "(this.type='date')"
                   
                ],
                'label' => 'date de début',
                'format' => 'yyyy-MM-dd'
            ])
            ->add('fin', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime(),
                'attr' => [
                    'placeholder' => 'date de fin',
                    'type' => 'text',
                    'onfocusout' => "(this.type='text')",
                    'onfocus' => "(this.type='date')"
                   
                ],
                'label' => 'date de fin',
                'format' => 'yyyy-MM-dd'
            ])

            ->add('idFormation', ChoiceType::class,[
                'label'=> 'Formation',
                'choices'  => [
                    'DWWM' => 1,
                    'CDA' => 2,
                    'Bachelor' => 3,
                ],
                
            ])
            
            ->add('nombreHeure', TextType::class, [
                'attr' => [
                    'placeholder' => 'Durée de la session',
                ]
            ])
            ->add('save', SubmitType::class,[
                'label' => "Enregistrer",
                'attr' => [ 'class' => "boutonForm" ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
    
}
