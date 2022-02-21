<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class InscriptionEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'nom'
                ]
            ])
            ->add('adresse', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'adresse'
                ]
            ])
            ->add('telephone', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'telephone'
                ]
            ])
            ->add('siret', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'siret'
                ]
            ])
            ->add('NAF', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'NAF'
                ]
            ])
            ->add('Effectif', NumberType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Effectif'
                ]
            ])
            ->add('ConventionCollective', NumberType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'ConventionCollective'
                ]
            ])
            ->add('EmployeurPublic', NumberType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'EmployeurPublic'
                ]
            ])
            ->add('CodeIDCCConvention', NumberType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'CodeIDCCConvention'
                ]
            ])
            
            ->add('linkedin', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'linkedin'
                ]
            ])
           
            ->add('Web', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Web'
                ]
                ])
            ->add('save', SubmitType::class,[
                'label'=> "Enregistrer",
                'attr' => [
                    'class' => 'boutonForm'
                          ]
            ]     );
                

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
