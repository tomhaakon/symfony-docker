<?php
// src/Controller/AbiutController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController {
 #[Route('/about', name: 'about')]
 /**
  * index
  *
  * @return Response
  */
 public function index(): Response {

  return $this->render('about/index.html.twig', [
    'msg' => 'Heihei dette er about page'
  ]);
 }
}
