<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SynthPresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('place',TextType::class,array(
            'required' => true,
            'label' => 'Place :',
        ));
        $builder->add('cote',IntegerType::class,array(
            'required' => true,
            'label' => 'Cote :',
            'attr' => array(
                'min' => '1',
                'max' => '999'
            )
        ));
        $builder->add('posPresse',IntegerType::class,array(
            'required' => true,
            'label' => 'Position presse :',
            'attr' => array(
                'min' => '1',
                'max' => '99'
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SynthPresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_synthpresse';
    }


}
