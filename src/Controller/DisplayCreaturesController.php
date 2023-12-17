<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CreatureRepository;


class DisplayCreaturesController extends AbstractController
{
    #[Route('/creatures', name: 'app_creatures')]
    public function index(CreatureRepository $creatureRepository): Response
    {
        $creatures = $creatureRepository->findAllSortedByDateAdded();

        return $this->render('display_creatures/index.html.twig', [
            'creatures' => $creatures,
        ]);
    }
}
