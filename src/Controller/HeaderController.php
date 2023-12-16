<?php
// src/Controller/AbiutController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HeaderController extends AbstractController
{

    public function index(): Response
    {

        return $this->render('header/index.html.twig', []);
    }
}
