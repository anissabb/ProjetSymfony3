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

        $res=[];

        foreach ($aeroports as $aeroport) {
            $res[]=['nom'=>$aeroport->getNom(),
                    'code'=>$aeroport->getCode(),
                    'id'=>$aeroport->getId()];
        }

        return $this->json($res);
        
    }
}
