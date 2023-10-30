<?php

namespace App\Form;

use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\Circuit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TeacherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('formation')
            ->add('circuit',EntityType::class,
            [
                'class' => Circuit::class,
                'choice_label' => 'title',
                //'multiple' => true,
                //'expanded' => true,
            ]
            
            )
            ->add('students',EntityType::class,
                [
                    'class' => Student::class,
                    'choice_label' => 'getFirstnameAndLastnameOfStudent',
                    'multiple' => true,
                    //'expanded' => true,
                ]
             );

        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Teacher::class,
        ]);
    }
}
