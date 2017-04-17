<?php

namespace App\AbstractFactory;

interface DoorFactoryInterface
{
    public function makeDoor(): DoorInterface;
    public function makeFittingExpert(): DoorFittingExpertInterface;
}
