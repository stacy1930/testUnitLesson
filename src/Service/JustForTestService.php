<?php 
namespace App\Service;

use App\Entity\User;

class JustForTestService
{
    public function testBool()
    {
        return true;
    }

    public function testEmpty(){
        return [];
    }

    public function testAssertEquals(){
        return "same";
    }

    public function testAssertArrayHasKey(){
        return ['foo' => 'baz'];
    }

    public function testInstanceOf(){
        return new User();
    }

    public function testAssertJsonStringEqualsJsonString(){
        return json_encode(["message" => "ok"]);
    }

    public function testAssertLessThan(){
        return 1000;
    }

}