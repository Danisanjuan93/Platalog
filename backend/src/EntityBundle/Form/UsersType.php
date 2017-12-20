<?php

namespace EntityBundle\Form;

use Doctrine\ORM\Mapping\UniqueConstraint;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array('required' => true,
                    'constraints' => array(new NotBlank())))
            ->add('lastName', TextType::class, array('required' => true,
                    'constraints' => array(new NotBlank())))
            ->add('password', TextType::class, array('required' => true,
                    'constraints' => array(new NotBlank())))
            ->add('email', EmailType::class, array('required' => true,
                    'constraints' => array(new NotBlank())))
            ->add('rol', TextType::class, array('required' => true,
                    'constraints' => array(new NotBlank())));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\Users',
            'constraints' => array(new UniqueEntity(array('fields' => array('email'))))
        ));
    }
}
