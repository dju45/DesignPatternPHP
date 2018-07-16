<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Visitor\Monkey;
use App\Visitor\Lion;
use App\Visitor\Dolphin;
use App\Visitor\Speak;

class VisitorTest extends TestCase
{
    public function testAnimal()
    {
    	$monkey = new Monkey();
        $lion = new Lion();
        $dolphin = new Dolphin();

        $speak = new Speak();

        $expectedObject1 = $monkey->accept($speak);    // Ooh oo aa aa!
        $expectedObject2 = $lion->accept($speak);      // Roaaar!
        $expectedObject3 = $dolphin->accept($speak);   // Tuut tutt tuutt!

        $mock1 = $this->getMockBuilder(Monkey::class)
                     ->setMethods(['accept'])
                     ->getMock();

        $mock1->expects($this->any())
              ->method('accept')
              ->with($this->identicalTo($expectedObject1));

        $mock2 = $this->getMockBuilder(Lion::class)
                      ->setMethods(['accept'])
                      ->getMock();

        $mock2->expects($this->any())
              ->method('accept')
              ->with($this->identicalTo($expectedObject2));

        $mock3 = $this->getMockBuilder(Dolphin::class)
                      ->setMethods(['accept'])
                      ->getMock();

        $mock3->expects($this->any())
              ->method('accept')
              ->with($this->identicalTo($expectedObject3));

        $this->assertTrue(true);
    }
}
