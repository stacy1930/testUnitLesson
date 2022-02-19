<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\JustForTestService;
use App\Entity\User;


class JustForTestTest extends KernelTestCase
{
    public function testAll(): void
    {
        $kernel = self::bootKernel();

        $container = static::getContainer();
        $justForTest = $container->get(JustForTestService::class);
        $this->assertSame('test', $kernel->getEnvironment());
        $this->assertTrue($justForTest->testBool());
        $this->assertEmpty($justForTest->testEmpty());
        $this->assertEquals('same', $justForTest->testSame());
        $this->assertArrayHasKey('foo', $justForTest->testAssertArrayHasKey());
        $this->assertInstanceOf(User::class, $justForTest->testInstanceOf());
    }
}
