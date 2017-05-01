<?php

namespace App\Visitor;

use App\Visitor\AnimalInterface;
use App\Visitor\AnimalOperationInterface;

class Dolphin implements AnimalInterface
{
    public function speak()
    {
        return 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitDolphin($this);
    }
}
