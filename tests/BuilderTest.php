<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Builder\BurgerBuilder;
use App\Builder\Burger;

class BuilderTest extends TestCase
{
    public function testBurgerBuilder()
    {
    	$burgerBuilder = (new BurgerBuilder(14))
                    ->addPepperoni()
                    ->addLettuce()
                    ->addTomato()
                    ->build();

        $this->assertInstanceOf(Burger::class, $burgerBuilder);
    }
}
