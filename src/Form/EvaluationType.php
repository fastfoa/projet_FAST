<?php

namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('remarqueMS', TextareaType::class, [
                'label' => 'Maître de stage',
                'attr' => [ 'col'=>'5','rows' => '2', 'placeholder' => 'Merci de saisir vos remarques']
            ])

            ->add('remarqueApp', TextareaType::class, [
                'label' => 'Apprenti',
                'attr' => ['col'=>'5','rows' => '2']
            ])
            ->add('remarqueOF', TextareaType::class, [
                'label' => 'Foreach Academy',
                'attr' => ['col'=>'5','rows' => '2']
            ])
            ->add('note',RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 5
                ]
            ])
            ->add(
                'Envoyer',
                SubmitType::class,
                ['label' => 'Envoyer', 'attr' => ['style' => 'margin-top:10px']]
            );;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
