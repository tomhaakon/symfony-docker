<?php
namespace App\Controller;
date_default_timezone_set('Europe/Oslo');

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Item;
use App\Form\ItemType;
use App\Repository\ItemRepository;

class AddItemController extends AbstractController
{
    #[Route('/add/item', name: 'app_add_item')]
    
    public function index(Request $request, EntityManagerInterface $entityManger, ItemRepository $itemRepository): Response
    {
        $item = new Item();
        $form = $this->createForm(ItemType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Check if item already exists
            $existingItem = $itemRepository->findOneByName($item->getName());
            
            if ($existingItem) {
                $this->addFlash('error', 'An item with this name already exists.');
            } else {
                $item->setDateAdded(new \DateTime()); 
                $item->setItemLevel(1);
                $item->setSetItem(0);

                $entityManger->persist($item);
                $entityManger->flush();

                $this->addFlash('success', 'Item added successfully!');
                return $this->redirectToRoute($request->get('_route'));
            }
        }
        return $this->render('add_item/index.html.twig', [
        'form' => $form->createView(),
        ]);
    }
}
