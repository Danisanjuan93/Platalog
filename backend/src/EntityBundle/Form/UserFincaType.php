<?php
/**
 * Created by PhpStorm.
 * User: Dani SJ
 * Date: 21/04/2017
 * Time: 11:17
 */

namespace EntityBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserFincaType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId', EntityType::class, array('required' => true,
                'class' => 'EntityBundle\Entity\Users'))
            ->add('fincaId', EntityType::class, array('required' => true,
                'class' => 'EntityBundle\Entity\Finca'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\UserFinca'
        ));
    }

}