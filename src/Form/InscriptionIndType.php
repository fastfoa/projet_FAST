<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InscriptionIndType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre adresse email' ] ]
                )
            ->add('nom', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre nom' ] ]
                )
            ->add('prenom', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre prénom' ] ]
                )
            ->add('adresse', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre adresse' ] ]
                )
            ->add('telephone', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre numéro de téléphone' ] ]
                )
            ->add('fonctionMA', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre fonction' ] ]
                )
            ->add('siret', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre numéro de siret' ] ]
                )
            ->add('NAF', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre NAF' ] ]
                )
            ->add('Effectif', IntegerType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre effectif' ] ]
                )
            ->add('ConventionCollective', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre convention collective' ] ]
                )
            ->add('EmployeurPublic', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Employeur public' ] ]
                )
            ->add('raisonSocial', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Raison Social' ] ]
                )
            ->add('CodeIDCCConvention', TextType::class,
                    [ 'attr' => [ 'placeholder' => 'Entrez votre code IDCC' ] ]
                )
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
            ->add('save', SubmitType::class,
                    [ 'label' => "Enregistrer", 'attr' => [ 'class' => "boutonForm" ] ]
                )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
