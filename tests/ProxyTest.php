<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Proxy\Security;
use App\Proxy\LabDoor;

class Proxy extends TestCase
{
    public function testSecurityLabDoor()
    {
    	$door = new Security(new LabDoor());
		$expectedObject1 = $door->open('invalid'); // Big no! It ain't possible.
		$expectedObject2 = $door->open('$ecr@t'); // Opening lab door
		$expectedObject3 = $door->close(); // Closing lab door

		$mock = $this->getMockBuilder(Security::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['open'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('open')
             ->will($this->returnValue('Big no! It ain\'t possible.'))
             ->with($this->identicalTo($expectedObject1));

        $mock->expects($this->any())
             ->method('open')
             ->will($this->returnValue('Opening lab door'))
             ->with($this->identicalTo($expectedObject2));

        $mock->expects($this->any())
             ->method('open')
             ->will($this->returnValue('Closing lab door'))
             ->with($this->identicalTo($expectedObject3));

        $this->assertTrue(true);
    }
}

