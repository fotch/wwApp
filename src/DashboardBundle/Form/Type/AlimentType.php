<?php

namespace DashboardBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use DashboardBundle\Entity\Category;

class AlimentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('quantityValue')
            ->add('category', EntityType::class, array(
                'class' => 'DashboardBundle:Category',
                'choice_label' => function ($category) {
                    return $category->getName();
                }
            ))
            ->add('quantity', EntityType::class, array(
                'class' => 'DashboardBundle:Quantity',
                'choice_label' => function ($quantity) {
                    return $quantity->getType();
                }
            ))
            ->add('point')

            ->add('submit', SubmitType::class)
            //->add('quantityType')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DashboardBundle\Entity\Aliment'
        ));
    }
}