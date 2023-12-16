<?php
// src/Controller/FrontPageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontPageController extends AbstractController {
 private $headerMenuController;

 #[Route('/', name: 'front_page')]
 /**
  * index
  *
  * @return Response
  */
 public function index(): Response {
  // Use the HeaderMenuController instance

  return $this->render('front_page/index.html.twig', [

  ]);
 }
}
