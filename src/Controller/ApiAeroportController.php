<?php

namespace App\Controller;

use App\Repository\AeroportRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api',name:'api')]
class ApiAeroportController extends AbstractController
{

    // creer les actions pour l'api

    // GET - Select 
    // GET + id - Select simple

    // POST - Insert  (Pour rajouter un)

    // Delete- delete

    // PUT - Update 
    // 

    //GETALL
    #[Route('/aeroports', name: 'app_api_aeroports')]
    public function getAll(AeroportRepository $rep): Response
    {
        $aeroports=$rep->findAll();
        dump(json_encode($aeroports[0]));
        dd($aeroports[0]);
        dd($aeroports);
    }
}
