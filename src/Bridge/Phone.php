<?php

namespace App\Bridge;

use App\Bridge\Device;

class Phone extends Device
{
    public function send($body)
    {
        //$body .= "Sent from a Phone";

        return $this->sender->send($body);
    }
}
