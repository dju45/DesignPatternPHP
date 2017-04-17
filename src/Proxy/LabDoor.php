<?php

namespace App\Proxy;

use App\Proxy\DoorInterface;

class LabDoor implements DoorInterface
{
    public function open()
    {
        echo "Opening lab door";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}

