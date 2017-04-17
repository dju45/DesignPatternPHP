<?php

namespace App\State;

use App\State\WritingStateInterface;

class LowerCase implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtolower($words);
    }
}
