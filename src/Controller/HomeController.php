<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $response = $this->render('home/index.html.twig');
        $response->setSharedMaxAge(600);
        $response->setMaxAge(300);

        return $response;
    }
}
