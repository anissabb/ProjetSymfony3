<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiAeroportController extends AbstractController
{
    #[Route('/api/aeroport', name: 'app_api_aeroport')]
    public function index(): Response
    {
        return $this->render('api_aeroport/index.html.twig', [
            'controller_name' => 'ApiAeroportController',
        ]);
    }
}
