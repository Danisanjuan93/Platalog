<?php

namespace EntityBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ParcelRegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('collectDate', TextType::class, array('required' => false,
            ))
            ->add('benefits', NumberType::class, array('required' => false,
            ))
            ->add('collectWeight', NumberType::class, array('required' => false,
            ))
            ->add('estimatedDate', TextType::class, array('required' => false,
            ))
            ->add('estimateBenefits', NumberType::class, array('required' => false,
            ))
            ->add('weightEstimate', NumberType::class, array('required' => false,
            ))
            ->add('parcel', EntityType::class, array('required' => false,
                'class' => 'EntityBundle\Entity\Parcel'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\ParcelRegister'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitybundle_parcelregister';
    }


}
