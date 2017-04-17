<?php

namespace App\Bridge;

use App\Bridge\MessagingInterface;

class Whatsapp implements MessagingInterface
{
    public function send($body)
    {
        //Send a message through the Whatsapp API

        return $body;
    }
}
