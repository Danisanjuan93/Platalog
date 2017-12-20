<?php

namespace EntityBundle\Form;

use Doctrine\ORM\Mapping\Entity;
use EntityBundle\EntityBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use EntityBundle\Form\NotebookType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('finca', EntityType::class, array('required' => true,
                'class' => 'EntityBundle\Entity\Finca'))
            ->add('noteText', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())))
            ->add('noteTittle', TextType::class, array('required' => true,
                'constraints' => array(new NotBlank())));
    }

    /**sss
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntityBundle\Entity\Note'
        ));
    }
}
