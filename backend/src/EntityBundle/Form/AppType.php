<?php

namespace EntityBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AppType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('user'        , UserType::class       , array('required'      => false,
                    'constraints'   => array())
            )

            ->add('deviceId'    , TextType::class         , array('required'      => false,
                    'constraints'   => array())
            )

            ->add('tokenId'     , TextType::class         , array('required'      => false,
                    'constraints'   => array())
            )

            ->add('platform'    , TextType::class         , array('required'      => false,
                    'constraints'   => array())
            )
            ->add('appVersion'  , TextType::class         , array('required'      => false,
                    'constraints'   => array())
            )

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\App'
        ));
    }
}
