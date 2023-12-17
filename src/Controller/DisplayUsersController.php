<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;


class DisplayUsersController extends AbstractController
{
    #[Route('/display/users', name: 'app_display_users')]
    public function index(UserRepository $userRepository): Response
    {


        $users = $userRepository->findAll();

        return $this->render('display_users/index.html.twig', [
            'users' => $users,
        ]);
    }
    
    #[Route('/users/{id}', name: 'app_display_user')]
    public function displayUser(int $id, UserRepository $userRepository): Response
    {
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found.');
    }

    return $this->render('display_users/display_user.html.twig', [
        'user' => $user,
    ]);
}

}
