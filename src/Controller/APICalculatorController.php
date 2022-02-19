<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Service\CalculatorService;

#[Route('/api/calculator', name: 'api_calculator')]
class APICalculatorController extends AbstractController
{
    #[Route('/addition', name: 'api_calculator_addition')]
    #[Methode("POST")]
    public function addition(Request $request, CalculatorService $calculator): Response
    {
        $data = json_decode($request->getContent(), true);
        $value1 = intval($data['value1']);
        $value2 = intval($data['value2']);
        return $this->json(['value' => $calculator->addition($value1, $value2)]);
    }

    #[Route('/substraction', name: 'api_calculator_substraction')]
    #[Methode("POST")]
    public function substraction(Request $request, CalculatorService $calculator): Response
    {
        $data = json_decode($request->getContent(), true);
        $value1 = intval($data['value1']);
        $value2 = intval($data['value2']);
        return $this->json(['value' => $calculator->substraction($value1, $value2)]);
    }

    #[Route('/division', name: 'api_calculator_division')]
    #[Methode("POST")]
    public function division(Request $request, CalculatorService $calculator): Response
    {
        $data = json_decode($request->getContent(), true);
        $value1 = intval($data['value1']);
        $value2 = intval($data['value2']);
        return $this->json(['value' => $calculator->division($value1, $value2)]);
    }

    #[Route('/modulo', name: 'api_calculator_modulo')]
    #[Methode("POST")]
    public function modulo(Request $request, CalculatorService $calculator): Response
    {
        $data = json_decode($request->getContent(), true);
        $value1 = intval($data['value1']);
        $value2 = intval($data['value2']);
        return $this->json(['value' => $calculator->modulo($value1, $value2)]);
    }

    #[Route('/square', name: 'api_calculator_square')]
    #[Methode("POST")]
    public function square(Request $request, CalculatorService $calculator): Response
    {
        $data = json_decode($request->getContent(), true);
        $value1 = intval($data['value1']);
        $value2 = intval($data['value2']);
        return $this->json(['value' => $calculator->square($value1, $value2)]);
    }
}
