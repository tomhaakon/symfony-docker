<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request; 
use App\Repository\CreatureRepository;
use App\Form\CreatureType;

class EditCreatureController extends AbstractController
{
 #[Route('/edit/creature/{id}', name: 'app_edit_creature')]
    public function edit(Request $request, EntityManagerInterface $entityManager, CreatureRepository $creatureRepository, int $id): Response
    {
        $creature = $creatureRepository->find($id);

        if (!$creature) {
            throw new NotFoundHttpException('Creature not found');
        }

        $form = $this->createForm(CreatureType::class, $creature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        $creature->setDateLastUpdated(new \DateTime('now', new \DateTimeZone('Europe/Oslo')));
       
            $entityManager->flush();
            $this->addFlash('success', 'Creature updated successfully!');
            return $this->redirectToRoute('app_edit_creature', ['id' => $id]);
        }

        return $this->render('edit_creature/index.html.twig', [
            'form' => $form->createView(),
            'creature' => $creature,
            'date_added' => $creature->getDateAdded()->format('Y-m-d H:i:s'),
            'date_updated' => $creature->getDateLastUpdated() ? $creature->getDateLastUpdated()->format('Y-m-d H:i:s') : 'Has not been updated yet',
        ]);
    }
}
