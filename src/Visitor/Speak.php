<?php

namespace App\Visitor;

use App\Visitor\AnimalOperationInterface;
use App\Visitor\Monkey;
use App\Visitor\Lion;
use App\Visitor\Dolphin;

class Speak implements AnimalOperationInterface
{
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}
