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

            ->add('Imagencaserio','text', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Imagen'
                ))

            ->add('Video_1','textarea', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Video 1'
                ))
            ->add('Video_2','textarea', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Video 2'
                ))
            ->add('Video_3','textarea', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Video 3'
                ))

            ->add('fecha','date', array(
                'attr'=> array('class'=>'form-control'),
                'label'=>'Fecha'
                ))
            ->add('galeria')
            ;
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
