<?php

namespace App\Form;

use App\Entity\Creature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('level')
            ->add('decription')
            ->add('health')
            ->add('armor')
            ->add('min_dmg')
            ->add('max_dmg')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Creature::class,
        ]);
    }
}
