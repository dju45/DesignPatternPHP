<?php

namespace App\Strategy;

use App\Strategy\StrategyInterface;

class BubbleSortStrategy implements StrategyInterface
{
    public function sort(array $dataset): array
    {
        return $dataset;
    }
}
