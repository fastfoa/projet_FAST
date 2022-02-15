<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InscriptionMAType extends AbstractType
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
            ->add('dateNaissance', DateType::class,
                    [ 'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'data' => new \DateTime() ]
                )
            ->add('save', SubmitType::class,
                    [ 'label' => "Je m'inscris", 'attr' => [ 'class' => "boutonForm" ] ]
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
