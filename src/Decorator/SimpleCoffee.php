<?php

namespace App\Decorator;

use App\Decorator\CoffeeInterface;

class SimpleCoffee implements CoffeeInterface
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}
