<?php

namespace Admin\InfinityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PurchaseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('dateExpLc')
            ->add('dateLc')
            ->add('dateUltime')
            ->add('lcn')
            ->add('shipment')
            ->add('ref')
            ->add('bankLc')
            ->add('pathFile')
            ->add('order')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\InfinityBundle\Entity\Purchase'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_infinitybundle_purchase';
    }
}
