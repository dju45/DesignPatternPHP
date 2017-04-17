<?php

namespace App\Bridge;

use App\Bridge\MessagingInterface;

class Skype implements MessagingInterface
{
    public function send($body)
    {
        //Send a message through the Skype API

        return $body;
    }
}
