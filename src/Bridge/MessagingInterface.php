<?php

namespace App\Bridge;

interface MessagingInterface
{
    public function send($body);
}
