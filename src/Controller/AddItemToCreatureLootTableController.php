<?php

namespace App\Controller;
date_default_timezone_set('Europe/Oslo');

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\CreatureLootTable;
use App\Form\CreatureLootTableType;
use App\Repository\CreatureLootTableRepository;

use App\Entity\Item;
use App\Form\ItemType;
use App\Repository\ItemRepository;

class AddItemToCreatureLootTableController extends AbstractController
{
    #[Route('/add/item/to/creature/loot/table', name: 'app_add_item_to_creature_loot_table')]
    public function index(): Response
    {
        return $this->render('add_item_to_creature_loot_table/index.html.twig', [
            'controller_name' => 'AddItemToCreatureLootTableController',
        ]);
    }
}
