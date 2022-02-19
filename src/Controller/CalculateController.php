<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\JustForTestService;

class CalculateController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(JustForTestService $t): Response
    {
        return $this->render('calculate/index.html.twig', [
            'controller_name' => 'CalculateController',
        ]);
    }
}
