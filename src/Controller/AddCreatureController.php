<?php

namespace App\Controller;
date_default_timezone_set('Europe/Oslo');

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Creature;
use App\Form\CreatureType;
use App\Repository\CreatureRepository;

class AddCreatureController extends AbstractController
{
    #[Route('/add/creature', name: 'app_add_creature')]
    public function index(Request $request, EntityManagerInterface $entityManager, CreatureRepository $creatureRepository): Response
    {
        $creature = new Creature();
        $form = $this->createForm(CreatureType::class, $creature);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Check if creature already exists
            $existingCreature = $creatureRepository->findOneByName($creature->getName());
          
            if ($existingCreature) {
               $this->addFlash('error', 'A creature with this name already exists.');
            } else {
                $creature->setDateAdded(new \DateTime()); // Set the current date and time
                $entityManager->persist($creature);
                $entityManager->flush();
                $this->addFlash('success', 'Creature added successfully!');
                return $this->redirectToRoute($request->get('_route'));
            }
        }

        return $this->render('add_creature/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

