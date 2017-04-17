<?php

namespace App\Strategy;

use App\Strategy\StrategyInterface;

class QuickSortStrategy implements StrategyInterface
{
    public function sort(array $dataset): array
    {
        return $dataset;
    }
}
