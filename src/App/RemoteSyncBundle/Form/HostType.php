<?php

namespace App\RemoteSyncBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class HostType
 */
class HostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'address',
            TextType::class,
            [
                'label' => 'SSH address using [username]@[host]:[port] format',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Provide address. Example: root@example.com:22',
                ],
            ]
        );

        $builder->add(
            'docroot',
            TextType::class,
            [
                'label' => 'Document root directory',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Example: /var/www/casebox',
                ],
            ]
        );

        $builder->add(
            'environment',
            TextType::class,
            [
                'label' => 'Environment',
                'required' => true,
                'attr' => [
                    'class' => 'form-group form-control',
                    'placeholder' => 'Example: default',
                ],
            ]
        );

        $builder->add(
            'description',
            TextType::class,
            [
                'label' => 'Description',
                'required' => false,
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
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'csrf_protection' => true,
                'csrf_field_name' => '_token',
            ]
        );
    }
}
