<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Facade\ComputerFacade;
use App\Facade\Computer;

class FacadeTest extends TestCase
{
    public function testComputerFacade()
    {
   		$computer = new ComputerFacade(new Computer());
		$facade1 = $computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
		$facade2 = $computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz

        $mock1 = $this->getMockBuilder(ComputerFacade::class)
                      ->disableOriginalConstructor()
                      ->setMethods(['turnOn'])
                      ->getMock();

        $mock1->expects($this->any())
              ->method('turnOn')
              ->will($this->returnValue('Ouch! Beep beep! Loading.. Ready to be used!'))
              ->with($this->identicalTo($facade1));

        $mock2 = $this->getMockBuilder(ComputerFacade::class)
                      ->disableOriginalConstructor()
                      ->setMethods(['turnOff'])
                      ->getMock();

        $mock2->expects($this->any())
              ->method('turnOff')
              ->will($this->returnValue('Bup bup buzzz! Haah! Zzzzz'))
              ->with($this->identicalTo($facade2));

        $this->assertTrue(true);
    }
}
