<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class MessageType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * 
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $object = $builder->getData();

        $builder
            ->add(
                'id',
                HiddenType::class
            )
            ->add(
                'name',
                TextType::class,
                [
                    'required' => true
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'required' => true
                ]
            )
            ->add(
                'message',
                TextareaType::class,
                [
                    'required' => true
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => 'AppBundle\Entity\Message',
           'validation_groups' => ['contact']
        ]);
    }
}
