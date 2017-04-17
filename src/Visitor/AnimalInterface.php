<?php

namespace App\Visitor;

use App\Visitor\AnimalOperationInterface;

interface AnimalInterface
{
    public function accept(AnimalOperationInterface $operation);
}
