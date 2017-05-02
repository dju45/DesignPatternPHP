<?php

namespace App\Command;

class Bulb
{
    public function turnOn()
    {
        return "Bulb has been lit";
    }

    public function turnOff()
    {
        return "Darkness!";
    }
}
