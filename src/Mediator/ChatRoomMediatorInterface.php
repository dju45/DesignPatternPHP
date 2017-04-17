<?php

namespace App\Mediator;

use App\Mediator\User;

interface ChatRoomMediatorInterface
{
    public function showMessage(User $user, string $message);
}
