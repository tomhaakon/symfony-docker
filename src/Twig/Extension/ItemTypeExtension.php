<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\ItemTypeExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Repository\ItemTypesRepository;

class ItemTypeExtension extends AbstractExtension
{
   private $itemTypesRepository;

    public function __construct(ItemTypesRepository $itemTypesRepository)
    {
        $this->itemTypesRepository = $itemTypesRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_item_type_name', [$this, 'getItemTypeName']),
        ];
    }

    public function getItemTypeName(int $typeId): ?string
    {
        $itemType = $this->itemTypesRepository->find($typeId);
        return $itemType ? $itemType->getName() : 'Unknown Type';
    }
}
