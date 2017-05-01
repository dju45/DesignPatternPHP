<?php

namespace App\Proxy;

use App\Proxy\DoorInterface;

class LabDoor implements DoorInterface
{
    public function open()
    {
        return "Opening lab door";
    }

    public function close()
    {
        return "Closing the lab door";
    }
}

