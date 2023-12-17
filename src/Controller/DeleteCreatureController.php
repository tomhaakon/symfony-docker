<?php

namespace App\Controller;

use App\Entity\Creature;
use App\Repository\CreatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeleteCreatureController extends AbstractController
{
    #[Route('/delete/creature/{id}', name: 'app_delete_creature', methods: ['POST'])]
    public function delete(Request $request, Creature $creature, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$creature->getId(), $request->request->get('_token'))) {
            $creatureName = $creature->getName();           
            $entityManager->remove($creature);
            $entityManager->flush();

            $this->addFlash('success', 'Creature "' . $creatureName . '" successfully deleted.');
        }

        return $this->redirectToRoute('app_creatures');
    }
}
