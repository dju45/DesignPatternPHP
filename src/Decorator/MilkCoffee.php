<?php

namespace App\Decorator;

use App\Decorator\CoffeeInterface;
use App\Decorator\SimpleCoffee;

class MilkCoffee implements CoffeeInterface
{
    protected $coffee;

    public function __construct(SimpleCoffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
