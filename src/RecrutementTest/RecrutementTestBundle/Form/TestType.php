<?php

namespace RecrutementTest\RecrutementTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('libelle', 'text')
//            ->add('questions', 'collection', array('type' => new QuestionType(),
//                                                   'allow_add' => true,
//                                                   'allow_delete' => true))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecrutementTest\RecrutementTestBundle\Entity\Test'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recrutementtest_recrutementtestbundle_test';
    }
}
