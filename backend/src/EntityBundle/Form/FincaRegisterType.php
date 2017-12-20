<?php

namespace EntityBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class FincaRegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('totalBenefits', NumberType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('sownParcel', IntegerType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('collectParcel', IntegerType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('collectWeight', NumberType::class, array('required' => true,
                    'constraints' => array(new NotBlank())))
            ->add('registerDate', DateType::class, array('required' => true,
                'constraints' => array(new NotBlank()),
                'widget' => 'single_text',
                'input' => 'datetime'))
            ->add('handsNumber', IntegerType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('salablePercent', NumberType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('finca', EntityType::class, array('required' => true,
                'class' => 'EntityBundle\Entity\Finca'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\FincaRegister'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitybundle_fincaregister';
    }


}
