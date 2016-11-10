<?php

namespace App\CaseboxCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CoreType
 */
class CoreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'coreName',
            TextType::class,
            [
                'label' => 'Core name',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Provide ECMRS core name.',
                ],
            ]
        );

        $builder->add(
            'adminEmail',
            EmailType::class,
            [
                'label' => 'Admin email',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Example: noreply@example.com.',
                ],
            ]
        );

        $builder->add(
            'senderEmail',
            EmailType::class,
            [
                'label' => 'Sender email',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Example: noreply@example.com.',
                ],
            ]
        );

        $builder->add(
            'rootPassword',
            PasswordType::class,
            [
                'label' => 'Casebox root password',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                ],
            ]
        );

        $builder->add(
            'save',
            SubmitType::class,
            [
                'label' => 'Save',
                'attr' => [
                    'class' => 'btn btn-primary form-control',
                ],
            ]
        );

        if (!empty($options['edit'])) {
            $builder->add(
                'delete',
                SubmitType::class,
                [
                    'label' => 'Delete',
                    'attr' => [
                        'class' => 'btn btn-danger form-control',
                    ],
                ]
            );
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                //'data_class' => 'App\CaseboxCoreBundle\Entity\Core',
                'csrf_protection' => true,
                'csrf_field_name' => '_token',
            ]
        );
    }
}
