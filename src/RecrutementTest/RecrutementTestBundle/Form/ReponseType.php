<?php

namespace RecrutementTest\RecrutementTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReponseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule', 'text')
            ->add('isTrue', 'checkbox', array(
                'required' => false
            ))
            ->add('question')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecrutementTest\RecrutementTestBundle\Entity\Reponse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recrutementtest_recrutementtestbundle_reponse';
    }
}
