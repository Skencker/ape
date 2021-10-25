<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcoleAlaeController extends AbstractController
{
    #[Route('/ecole/alae', name: 'ecole_alae')]
    public function index(): Response
    {
        return $this->render('ecole_alae/index.html.twig', [
            'controller_name' => 'EcoleAlaeController',
        ]);
    }
}
