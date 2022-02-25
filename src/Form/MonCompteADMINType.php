<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MonCompteADMINType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[
            'label'=> false,
            'disabled' => true,
            'attr' => [
                'placeholder' => 'nom',
                'style'=> 'color: white'
            ]
        ])
        ->add('prenom', TextType::class,[
            'label'=> false,
            'disabled' => true,
            'attr' => [
                'placeholder' => 'prenom',
                'style'=> 'color: white'
            ]
        ])
        ->add('email', TextType::class,[
            'disabled' => true,
            'attr' => [ 
                'placeholder' => 'Entrez votre adresse email',
                'style'=> 'color: white'
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

        ->add('save', SubmitType::class,[
            'label'=> "Enregistrer",
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