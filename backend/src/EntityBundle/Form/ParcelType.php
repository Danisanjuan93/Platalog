<?php

namespace EntityBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ParcelType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('location', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('bananaTreeNumber', IntegerType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('finca', EntityType::class, array('required' => true,
                'class' => 'EntityBundle\Entity\Finca'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\Parcel'
        ));
    }
}
