<?php

namespace Distrito\CaseriosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaseriosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text', array(
                'attr' => array('class'=>'form-control'),
                'label'=>'Nombre'
                ))      
            ->add('descripcion','textarea', array(
                'attr'=> array('class'=>'form-control','rows'=>'8'),
                'label'=>'Descripción'
                ))
            ->add('fecha','date', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Fecha'
                ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrito\CaseriosBundle\Entity\Caserios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrito_caseriosbundle_caserios';
    }
}
