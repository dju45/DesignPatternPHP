<?php

namespace App\Visitor;

use App\Visitor\AnimalInterface;
use App\Visitor\AnimalOperationInterface;

class Lion implements AnimalInterface
{
    public function roar()
    {
        return 'Roaaar!';
    }

    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitLion($this);
    }
}

