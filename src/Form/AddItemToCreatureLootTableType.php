<?php

namespace App\Form;

use App\Entity\CreatureLootTable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddItemToCreatureLootTableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('for_creature_id')
            ->add('item_id')
            ->add('date_added')
            ->add('date_updated')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CreatureLootTable::class,
        ]);
    }
}
