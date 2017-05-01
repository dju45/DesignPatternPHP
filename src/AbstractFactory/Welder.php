<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorFittingExpertInterface;

class Welder implements DoorFittingExpertInterface
{
    public function getDescription()
    {
        return 'I can only fit iron doors';
    }
}

