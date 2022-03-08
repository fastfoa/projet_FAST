<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;

class DocumentExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('fileName', FileType::class, [
                'label' => 'fileName (PDF file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10240k',
                        /*
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                        */
                        ])
                ],
            ])->add('OFormation', CheckboxType::class, [
                'required' => false,
                'label' => false
            ])->add('MA', CheckboxType::class, [
                'required' => false,
                'label' => false
            ])->add('formateur', CheckboxType::class, [
                'required' => false,
                'label' => false
            ])->add('apprenti', CheckboxType::class, [
                'required' => false,
                'label' => false
            ])->add('entreprise', CheckboxType::class, [
                'required' => false,
                'label' => false
            ])
            
            
            ;
          
          
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}
