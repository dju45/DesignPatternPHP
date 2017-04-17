<?php

namespace App\Bridge;

use App\Device;

class Tablet extends Device
{
    public function send($body)
    {
        //$body .= "Sent from a Tablet";

        return $this->sender->send($body);
    }
}
