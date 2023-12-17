<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request; 
use App\Repository\CreatureLootTableRepository;


class DisplayLootTableController extends AbstractController
{
    #[Route('/display/loot/table/{creature_id}', name: 'app_display_loot_table')]
    public function index(EntityManagerInterface $entityManager,CreatureLootTableRepository  $creatureLootTableRepository, int $creature_id): Response

    {
      $lootTable = $creatureLootTableRepository->find($creature_id);

        return $this->render('display_loot_table/index.html.twig', [
            'controller_name' => 'DisplayLootTableController',
            'loot_table' => $lootTable,
        ]);
    }
}

