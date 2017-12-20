<?php

namespace EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class FincaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estateType', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('irrigationType', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('plantVariety', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('location', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('fincaName', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\Finca'
        ));
    }
}
