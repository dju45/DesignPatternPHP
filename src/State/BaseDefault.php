<?php

namespace App\State;

use App\State\WritingStateInterface;

class BaseDefault implements WritingStateInterface
{
    public function write(string $words)
    {
        return $words;
    }
}
