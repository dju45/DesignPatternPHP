<?php

namespace App\Visitor;

use App\Visitor\AnimalInterface;
use App\Visitor\AnimalOperationInterface;

class Monkey implements AnimalInterface
{
    public function shout()
    {
        return 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitMonkey($this);
    }
}
