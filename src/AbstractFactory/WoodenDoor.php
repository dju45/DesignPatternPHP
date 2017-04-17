<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorInterface;

class WoodenDoor implements DoorInterface
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}
