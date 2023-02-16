<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExemplesUtilisationController extends AbstractController
{
    #[Route('/exemples/utilisation', name: 'app_exemples_utilisation')]
    public function afficherTous(): Response
    {
        return $this->render('exemples_utilisation/afficher_tous.html.twig');
    }
}
