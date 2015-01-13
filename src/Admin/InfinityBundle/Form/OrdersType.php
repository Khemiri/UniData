<?php

namespace Admin\InfinityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbcf')
            ->add('paymentAt')
            ->add('shippingBy')
            ->add('date')
            ->add('datePrevu')
            ->add('price')
            ->add('quantity')
            ->add('observation')
            ->add('dateProforma')
            ->add('pathFile')
            ->add('provider')
            ->add('laboratory')
            ->add('importer')
            ->add('shipping')
            ->add('payment')
            ->add('bank')
            ->add('dci')
            ->add('purchase', 'collection', array(
                'type' => new PurchaseType(),
                'prototype' => true,
                'allow_add' => true,
                'by_reference' => false
            ))
            /*->add('invoice', 'collection', array(
                'type' => new InvoiceType(),
                'prototype' => true,
                'allow_add' => true,
                'by_reference' => false
            ))*/;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\InfinityBundle\Entity\Orders'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_infinitybundle_orders';
    }
}
