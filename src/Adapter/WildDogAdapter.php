<?php

namespace App\Adapter;

use App\Adapter\LionInterface;

class WildDogAdapter implements LionInterface
{
    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}
