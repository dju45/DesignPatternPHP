<?php

namespace App\Command;

use App\Command\CommandInterface;

class RemoteControl
{
    public function submit(CommandInterface $command)
    {
        $command->execute();
    }
}
