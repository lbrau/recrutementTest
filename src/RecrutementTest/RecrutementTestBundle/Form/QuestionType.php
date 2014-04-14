<?php

namespace RecrutementTest\RecrutementTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use RecrutementTest\RecrutementTestBundle\Entity\Test;

class QuestionType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'text')
//            ->add('reponses', 'collection', array('type' => new ReponseType(),
//                                                  'allow_add' => true,
//                                                  'allow_delete' => true))
            ->add('test')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecrutementTest\RecrutementTestBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recrutementtest_recrutementtestbundle_question';
    }
}
