<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Flyweight\TeaMaker;
use App\Flyweight\TeaShop;

class FlyweightTest extends TestCase
{
    public function testTeaShopMaker()
    {
    	$teaMaker = new TeaMaker();
		$shop = new TeaShop($teaMaker);

		$serving1 = $shop->takeOrder('less sugar', 1);
		$serving2 = $shop->takeOrder('more milk', 2);
		$serving3 = $shop->takeOrder('without sugar', 5);

		$shop->serve();
		// Serving tea to table# 1
		// Serving tea to table# 2
		// Serving tea to table# 5

        $mock = $this->getMockBuilder(TeaShop::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['takeOrder'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('takeOrder')
             ->will($this->returnValue('Serving tea to table# 1'))
             ->with($this->identicalTo($serving1));

        $mock->expects($this->any())
             ->method('takeOrder')
             ->will($this->returnValue('Serving tea to table# 2'))
             ->with($this->identicalTo($serving2));

        $mock->expects($this->any())
             ->method('takeOrder')
             ->will($this->returnValue('Serving tea to table# 5'))
             ->with($this->identicalTo($serving3));


    }
}
