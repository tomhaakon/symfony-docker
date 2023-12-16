<?php
// src/Controller/HeaderMenuController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HeaderMenuController extends AbstractController
{

            public function displayMenu() 
    {
        $menu = [
            [
                'label' => 'Home',
                'url' => '/',
            ],
            [
                'label' => 'About',
                'url' => '/about',
            ],
            [
                'label' => 'Contact',
                'url' => '/contact',
            ],
        ];

        return $this->render('header/menu.html.twig', [
            'menu' => $menu,
        ]);
    }
}
