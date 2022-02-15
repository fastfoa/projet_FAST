<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class InscriptionApprentiType extends AbstractType
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
            ->add('prenom', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'prenom'
                ]
            ])
            ->add('email', TextType::class,
            [ 'attr' => [ 'placeholder' => 'Entrez votre adresse email' ] ]
        )

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
            ->add('diplome', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'diplome'
                ]
            ])


            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
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
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Genre'
                ],
                'choices'  => [
                    'Homme' => true,
                    'Femme' => false,
                ],
            ])
            ->add('RepresentantLegal1', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Representant Legal 1'
                ]
            ])
            ->add('RepresentantLegal2', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Representant Legal 2'
                ]
            ])
            ->add('NIR', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Representant Legal 2'
                ]
            ])
            ->add('DepNaissance', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Departement de Naissance'
                ]
            ])
            ->add('CommuneNaissance', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Commune de Naissance'
                ]
            ])
            ->add('Nationalite', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Nationalite'
                ]
            ])
            ->add('RegimeSocial', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Regime Social'
                ]
            ])
            ->add('TravailleurHandicape', ChoiceType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Travailleur Handicape'
                ],
                'choices'  => [
                    'OUI' => true,
                    'NON' => false,
                ],
            ])
            ->add('SportifHautNiveau', ChoiceType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Sportif de Haut Niveau'
                ],
                'choices'  => [
                    'OUI' => true,
                    'NON' => false,
                ],
            ])
            ->add('SituationAvantContrat', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Situation Avant Contrat'
                ]
            ])
            ->add('DernierDiplome', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Dernier Diplome'
                ]
            ])
            ->add('DerniereClasse', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Derniere Classe'
                ]
            ])
            ->add('DiplomePlusHaut', TextType::class,[
                'label'=> false,
                'attr' => [
                    'placeholder' => 'Diplome Plus Haut'
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
