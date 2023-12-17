<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class ExploreController extends AbstractController
{
    #[Route('/explore', name: 'app_explore')]
    public function index(): Response
    {
        $request = Request::createFromGlobals();
           $form = $this->createFormBuilder()
        ->add('submit', SubmitType::class, ['label' => 'Attack'])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    die;
    }
        return $this->render('explore/index.html.twig', [
            'controller_name' => 'ExploreController',
            'form' => $form->createView(),
            'creatures' => [
                ['name' => 'Dog'],
                ['name' => 'Cat'],
                ['name' => 'Mouse'],
                ['name' => 'Bird'],
                ['name' => 'Fish']
            ]
        ]);
    }
}