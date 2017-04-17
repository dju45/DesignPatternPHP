<?php

namespace App\Mediator;

use App\Mediator\ChatRoomMediatorInterface;

class ChatRoom implements ChatRoomMediatorInterface
{
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        return $time . '[' . $sender . ']:' . $message;
    }
}
