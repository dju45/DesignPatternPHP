<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorFactoryInterface;
use App\AbstractFactory\DoorFittingExpertInterface;
use App\AbstractFactory\WoodenDoor;
use App\AbstractFactory\Carpenter;

class WoodenDoorFactory implements DoorFactoryInterface
{
    public function makeDoor(): DoorInterface
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpertInterface
    {
        return new Carpenter();
    }
}
