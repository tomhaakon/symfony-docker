<?php

namespace App\Form;

use App\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Repository\ItemTypesRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class ItemType extends AbstractType
{
   


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('set_item')
            ->add('item_level')
            ->add('slot')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Weapon' => 1,
                    'Armor' => 2,
                    'Jewelry' => 3,
                ],
            ])
            ->add('stat_health')
            ->add('stat_armor')
            ->add('stat_min_dmg')
            ->add('stat_max_dmg')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }

}
