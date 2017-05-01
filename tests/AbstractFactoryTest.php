<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\AbstractFactory\WoodenDoorFactory;
use App\AbstractFactory\IronDoorFactory;

class AbstractFactoryTest extends TestCase
{
    public function testWoodenDoorFactory()
    {
		$woodenFactory = new WoodenDoorFactory();

		$door = $woodenFactory->makeDoor();
		$expert = $woodenFactory->makeFittingExpert();

		//$door->getDescription();  // Output: I am a wooden door
		//$expert->getDescription(); // Output: I can only fit wooden doors
        $this->assertEquals('I am a wooden door', $door->getDescription());
        $this->assertEquals('I can only fit wooden doors', $expert->getDescription());
    }

	public function testIronDoorFactory()
	{
		$ironFactory = new IronDoorFactory();

		$door = $ironFactory->makeDoor();
		$expert = $ironFactory->makeFittingExpert();

        $this->assertEquals('I am an iron door', $door->getDescription());
        $this->assertEquals('I can only fit iron doors', $expert->getDescription());
		//$door->getDescription();  // Output: I am an iron door
		//$expert->getDescription(); // Output: I can only fit iron doors
	}
}
