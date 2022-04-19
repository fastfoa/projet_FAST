<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
class InscriptionApprentiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'nom'
                ]
            ])
            ->add('prenom', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'prenom'
                ]
            ])
            ->add('email', TextType::class,
            [ 'attr' => [ 'placeholder' => 'Entrez votre adresse email' ] ]
        )

            ->add('adresse', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'adresse'
                ]
            ])
            ->add('telephone', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'telephone'
                ]
            ])
            ->add('diplome', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'diplome'
                ]
            ])


            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'placeholder' => 'date',
                    'type' => 'text',
                    'onfocusout' => "(this.type='text')",
                    'onfocus' => "(this.type='date')"
                    
                ],
                'label' => false,
                'format' => 'yyyy-MM-dd'
            ])
            ->add('Genre', ChoiceType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Genre'
                ],
                'choices'  => [
                    'Homme' => true,
                    'Femme' => false,
                ],
            ])
            ->add('RepresentantLegal1', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Representant Legal 1'
                ]
            ])
            ->add('RepresentantLegal2', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Representant Legal 2'
                ]
            ])
            ->add('NIR', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'NIR'
                ]
            ])
            ->add('DepNaissance', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Departement de Naissance'
                ]
            ])
            ->add('CommuneNaissance', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Commune de Naissance'
                ]
            ])
            ->add('Nationalite', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Nationalite'
                ]
            ])
            ->add('RegimeSocial', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Regime Social'
                ]
            ])
            ->add('TravailleurHandicape', ChoiceType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Travailleur Handicape'
                ],
                'choices'  => [
                    'OUI' => true,
                    'NON' => false,
                ],
            ])
            ->add('SportifHautNiveau', ChoiceType::class,[
                
                'label'=> 'Sportif de Haut Niveau',
                'choices'  => [
                    'OUI' => true,
                    'NON' => false,
                ],
                
            ])
            ->add('SituationAvantContrat', TextType::class,[
                'label'=> false, 
                'required' => false,
                'attr' => [
                    'placeholder' => 'Situation Avant Contrat'
                ]
            ])
            ->add('DernierDiplome', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Dernier Diplome'
                ]
            ])
            ->add('ConventionCollective', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Convention Collective'
                ]
            ])
            ->add('DiplomePlusHaut', TextType::class,[
                 'label'=> false, 'required' => false,
                'attr' => [
                    'placeholder' => 'Diplome Plus Haut'
                ]
            ])
            ->add('old_password', PasswordType::class,[
                'mapped'=>false,
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Mot de passe actuel'
                    
                ] 
            ])
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'Le mot de passe et la confirmation doivent être identique.',
                'required' => true,
                'first_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Merci de saisir votre nouveau mot de passe.'
                    ]
                ],
                'second_options' => [
                    'label' => false, 
                    'attr' => [
                        'placeholder' => 'Merci de confirmer votre nouveau mot de passe.'
                    ]
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
