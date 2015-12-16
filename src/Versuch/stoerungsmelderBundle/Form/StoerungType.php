<?php

namespace Versuch\stoerungsmelderBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StoerungType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maschineId')
            ->add('stStart', 'datetime')
            ->add('stEnd', 'datetime')
            ->add('bemerkungen')
            ->add('massnahmen')
            ->add('behoben')
            ->add('art')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Versuch\stoerungsmelderBundle\Entity\Stoerung'
        ));
    }
}
