<?php

namespace App\Form;

use App\Entity\User;
use phpDocumentor\Reflection\Types\Nullable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class InscriptionEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'mail'
            ]
        ])
        ->add('raisonSocial', TextType::class,[
            'label'=> false,
            'attr' => [
                'placeholder' => 'Raison Social'
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
            ->add('Effectif', null,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Effectif'
                ]
            ])
            ->add('ConventionCollective', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'ConventionCollective'
                ]
            ])
            ->add('CodeIDCCConvention', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'CodeIDCCConvention'
                ]
            ])
            ->add('save', SubmitType::class,[
                'label'=> "Enregistrer",
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
