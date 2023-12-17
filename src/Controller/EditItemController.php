<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request; 
use App\Repository\ItemRepository;
use App\Form\ItemType;


class EditItemController extends AbstractController
{
    #[Route('/edit/item/{id}', name: 'app_edit_item')]
    public function edit(Request $request, EntityManagerInterface $entityManager, ItemRepository $itemRepository, int $id): Response
    {
 
        $item = $itemRepository->find($id);
 
        if (!$item) {
            throw new NotFoundHttpException('Item not found');
        }

        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $item->setSetItem(0);
            $item->setDateLastUpdated(new \DateTime('now', new \DateTimeZone('Europe/Oslo')));
           
            $entityManager->flush();
            $this->addFlash('success', 'Item updated successfully!');
            
            return $this->redirectToRoute('app_edit_item', ['id' => $id]);
        }

        return $this->render('edit_item/index.html.twig', [
            'controller_name' => 'EditItemController',
            'form' => $form->createView(),
            'item' => $item,    
            'date_added' => $item->getDateAdded()->format('Y-m-d H:i:s'),
            'date_updated' => $item->getDateLastUpdated() ? $item->getDateLastUpdated()->format('Y-m-d H:i:s') : 'Has not been updated yet',
        ]);
    }
}
