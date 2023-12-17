<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ItemRepository;
use App\Repository\ItemTypesRepository;

class ItemController extends AbstractController
{
    #[Route('/items', name: 'app_item')]
    public function index(ItemTypesRepository $itemTypesRepository, ItemRepository $itemRepository): Response
    {
        $items = $itemRepository->findAllSortedByDateAdded();
        
        $typeIds = array_unique(array_map(function($item) {
            return $item->getType();
        }, $items));
       
       
             // Fetch item types
        $itemTypes = $itemTypesRepository->findByIds($typeIds);

        // Map type IDs to their names for easy access
        $typeNames = [];
        foreach ($itemTypes as $type) {
            $typeNames[$type->getId()] = $type->getName();
        }
       
        return $this->render('item/index.html.twig', [
            'controller_name' => 'ItemController',
            'items' => $items,
            'typeNames' => $typeNames,

        ]);
    }
}
