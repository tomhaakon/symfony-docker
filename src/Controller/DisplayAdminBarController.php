<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DisplayAdminBarController extends AbstractController
{
    #[Route('/display/admin/bar', name: 'app_display_admin_bar')]
    public function index(): Response
    {
        return $this->render('display_admin_bar/index.html.twig', [
            'controller_name' => 'DisplayAdminBarController',
        ]);
    }
}
