<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Command\Bulb;
use App\Command\TurnOn;
use App\Command\TurnOff;
use App\Command\RemoteControl;

class CommandTest extends TestCase
{
    public function testBulb()
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        $expectedObject1 = $remote->submit($turnOn); // Bulb has been lit!
        $expectedObject2 = $remote->submit($turnOff); // Darkness!

        $mock = $this->getMockBuilder(RemoteControl::class)
                     ->setMethods(['submit'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('submit')
             ->will($this->returnValue('Bulb has been lit!'))
             ->with($this->identicalTo($expectedObject1));

        $mock->expects($this->any())
             ->method('submit')
             ->will($this->returnValue('Darkness!'))
             ->with($this->identicalTo($expectedObject2));

        $this->assertTrue(true);
    }
}
