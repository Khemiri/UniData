<?php

namespace Admin\InfinityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvoiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('datePayment')
            ->add('dpcb')
            ->add('dateSortie')
            ->add('airwaybill')
            ->add('order')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\InfinityBundle\Entity\Invoice'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_infinitybundle_invoice';
    }
}
