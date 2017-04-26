<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Decorator\SimpleCoffee;
use App\Decorator\MilkCoffee;
use App\Decorator\WhipCoffee;
use App\Decorator\VanillaCoffee;

class DecoratorTest extends TestCase
{
    public function testSimpleCoffee()
    {
        $someCoffee = new SimpleCoffee();

        $this->assertEquals(10, $someCoffee->getCost());
        $this->assertEquals('Simple coffee', $someCoffee->getDescription());
    }

    public function testMilkCoffee()
    {
        $someCoffee = new MilkCoffee(new SimpleCoffee);

        $this->assertEquals(12, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, milk', $someCoffee->getDescription());
    }

    public function testWhipCoffee()
    {
        $someCoffee = new WhipCoffee(new SimpleCoffee);

        $this->assertEquals(15, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, whip', $someCoffee->getDescription());
    }

    public function testVanillaCoffee()
    {
        $someCoffee = new VanillaCoffee(new SimpleCoffee);

        $this->assertEquals(13, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, vanilla', $someCoffee->getDescription());
    }
}
