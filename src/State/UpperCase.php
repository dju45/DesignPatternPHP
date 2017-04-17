<?php

namespace App\State;

use App\State\WritingStateInterface;

class UpperCase implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtoupper($words);
    }
}
