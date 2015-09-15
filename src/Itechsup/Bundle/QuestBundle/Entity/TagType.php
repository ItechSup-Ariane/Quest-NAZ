<?php
namespace Itechsup\Bundle\QuestBundle\Entity;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Categorie extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Itechsup\Bundle\QuestBundle\Entity\Question',
        ));
    }

    public function getName()
    {
        return 'question';
    }
}
