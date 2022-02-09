<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Session;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('debut')
            ->add('fin')
            ->add('ok', SubmitType::class, [
                'validation_groups' => ['Registration'],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
