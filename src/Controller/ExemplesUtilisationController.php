<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExemplesUtilisationController extends AbstractController
{
    #[Route('/exemples/utilisation/afficher/tous', name: 'afficher_tous')]
    public function afficherTous(): Response
    {
        return $this->render('exemples_utilisation/afficher_tous.html.twig');
    }
}
