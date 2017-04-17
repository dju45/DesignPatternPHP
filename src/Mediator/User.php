<?php

namespace App\Mediator;

use App\Mediator\ChatRoom;

class User
{
    protected $name;
    protected $chatMediator;

    public function __construct(string $name, ChatRoom $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName()
    {
        return $this->name;
    }

    public function send($message)
    {
        $this->chatMediator->showMessage($this, $message);
    }
}
