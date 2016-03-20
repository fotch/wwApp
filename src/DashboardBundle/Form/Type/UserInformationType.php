<?php

namespace DashboardBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserInformationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', EntityType::class, array(
                'class' => 'DashboardBundle:Gender',
                'choice_label' => function($gender) {
                    return $gender->getName();
                }
            ))
            ->add('firstname' )
            ->add('lastname')
            ->add('birthday', null, array(
                'widget' => 'single_text',
                'html5' => false
            ))
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DashboardBundle\Entity\UserInformation'
        ));
    }
}

