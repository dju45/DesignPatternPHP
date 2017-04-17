<?php

namespace App\Strategy;

use App\Strategy\StrategyInterface;

class SorterContext
{
    protected $sorter;

    public function __construct(StrategyInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}
