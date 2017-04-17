<?php

namespace App\Strategy;

interface StrategyInterface
{
    public function sort(array $dataset): array;
}
