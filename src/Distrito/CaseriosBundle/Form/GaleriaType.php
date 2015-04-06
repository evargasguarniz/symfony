<?php

namespace Distrito\CaseriosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GaleriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imgGaleria')
            ->add('descripcion')
            ->add('Caserios_id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrito\CaseriosBundle\Entity\Galeria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrito_caseriosbundle_galeria';
    }
}
