<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Adapter\WildDog;
use App\Adapter\WildDogAdapter;
use App\Adapter\Hunter;

class AdapterTest extends TestCase
{
    public function testWildDogAdapter()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);

        $hunter = new Hunter();
        $hunter->hunt($wildDogAdapter);

        $mock = $this->getMockBuilder(Hunter::class)
                     ->setMethods(['hunt'])
                     ->getMock();

        $mock->expects($this->any())
              ->method('hunt')
              ->with($this->identicalTo($wildDogAdapter));
    }
}
