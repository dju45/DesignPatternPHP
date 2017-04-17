<?php

namespace App\Bridge;

interface DeviceInterface
{
    public function setSender(MessagingInterface $sender);
    public function send($body);
}
