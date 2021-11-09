<?php

namespace App\Controller;

use App\Entity\Organigramme;
use App\Entity\TrombiEcoleAlae;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcoleAlaeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/ecole-alae', name: 'ecole_alae')]
    public function index(): Response
    {
        $trombis = $this->entityManager->getRepository(TrombiEcoleAlae::class)->findAll();
        $organigrammes = $this->entityManager->getRepository(Organigramme::class)->findAll();

        return $this->render('ecole_alae/index.html.twig', [
            'trombis' => $trombis,
            'orga' => $organigrammes,
        ]);
    }
}
