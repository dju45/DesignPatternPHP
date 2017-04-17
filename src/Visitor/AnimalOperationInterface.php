<?php

namespace App\Visitor;

interface AnimalOperationInterface
{
    public function visitMonkey(Monkey $monkey);
    public function visitLion(Lion $lion);
    public function visitDolphin(Dolphin $dolphin);
}
