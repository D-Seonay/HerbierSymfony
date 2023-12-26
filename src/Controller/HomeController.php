<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/Lieux', name: 'app_lieux')]
    public function lieux(): Response
    {
        return $this->render('home/lieux.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/Releves', name: 'app_releve')]
    public function releve(): Response
    {
        return $this->render('home/releve.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
