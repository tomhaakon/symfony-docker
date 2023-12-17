<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreatureLootTableController extends AbstractController
{
    #[Route('/creature/loot/table', name: 'app_creature_loot_table')]
    public function index(): Response
    {
        return $this->render('creature_loot_table/index.html.twig', [
            'controller_name' => 'CreatureLootTableController',
        ]);
    }
}
