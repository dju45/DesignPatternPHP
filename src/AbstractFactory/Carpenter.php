<?php

namespace App\AbstractFactory;

use App\AbstractFactory\DoorFittingExpertInterface;

class Carpenter implements DoorFittingExpertInterface
{
    public function getDescription()
    {
        return 'I can only fit wooden doors';
    }
}
