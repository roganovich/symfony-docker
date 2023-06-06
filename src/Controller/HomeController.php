<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/', name: 'home_index')]
    public function index(): Response
    {
        return new Response(
            '<html><body><h1>Welcome</h1></body></html>'
        );
    }
}