<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\CalculatorService;

class CalculatorTest extends KernelTestCase
{
    public function testAddition(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->addition(1,1);
        $this->assertEquals(2, $result);
    }
}
