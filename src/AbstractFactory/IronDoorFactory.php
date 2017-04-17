<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorFactoryInterface;
use App\AbstractFactory\DoorFittingExpertInterface;
use App\AbstractFactory\IronDoor;
use App\AbstractFactory\Welder;

class IronDoorFactory implements DoorFactoryInterface
{
    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpertInterface
    {
        return new Welder();
    }
}
