<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorInterface;

class IronDoor implements DoorInterface
{
    public function getDescription()
    {
        return 'I am an iron door';
    }
}
