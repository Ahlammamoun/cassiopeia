<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                'placeholder' => 'Titre de votre commentaire'
                ]  
            ])
            ->add('description', TextareaType::class, [
                'label' => 'commentaire',
                'attr' => [
                    'placeholder' => 'Votre commentaire'
                ]
            ])
            ->add('username', TextType::class, [
                'label' => 'Pseudo',
                'attr' => [
                    'placeholder' => 'Votre pseudo'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'placeholder' => 'Saisissez votre e-mail'
                ]
            ])
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    'Exellent' => 5,
                    'Très bien' => 4,
                    'bien' => 3,
                    'difficle' => 2,
                    'Très difficile' => 1,
                ]
            ])


            //->add('Program')
            //->add('review')
            //->add('reviews')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
