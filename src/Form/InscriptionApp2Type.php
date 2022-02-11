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

class InscriptionApp2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->addE('email', 'mail des parents', "col-2")
            ->addS('nom', 'nom')
            ->addD('dateNaissance', 'date naiss' )
            ->add('inscrire', SubmitType::class,[
                'attr' => [
                    'class' => 'boutonForm'
                ]
            ])
        ;
        //$this->transform( $builder );

    }

    public function transform( $builder )
    {

        foreach( $builder->children as $k => $v )
        {
            $builder->children[ $k ] = NULL; 
            $tot = [ NULL,  
                                [
                                'label'=> false,
                                'attr' =>   [
                                                'placeholder' => 'XXX',
                                                'class' => 'dat'
                                            ]
                                ]

                        ]; 

        }

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
