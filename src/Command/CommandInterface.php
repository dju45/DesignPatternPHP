<?php

namespace App\Command;

interface CommandInterface
{
    public function execute();
    public function undo();
    public function redo();
}
