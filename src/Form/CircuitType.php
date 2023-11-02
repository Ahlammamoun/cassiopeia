<?php

namespace App\Form;

use App\Entity\Circuit;
use App\Entity\Teacher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class CircuitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            //->add('course')
            /*->add('teachers',EntityType::class, 
            
            [
               
                'class' => Teacher::class,
                'choice_label' => 'getFirstnameAndLastnameOfTeachers',
                'multiple' => true,
                'expanded' => true,
            ])*/
            //->add('student')
            ->add('duration')
            ->add('difficulties')
            ->add('success')
            ->add('diplomas')
            ->add('picture')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Circuit::class,
        ]);
    }
}
