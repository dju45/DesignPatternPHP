<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Strategy\BubbleSortStrategy;
use App\Strategy\QuickSortStrategy;
use App\Strategy\SorterContext;

class StrategyTest extends TestCase
{
    public function testBubbleSortStrategy()
    {
        $dataset = [1, 5, 4, 3, 2, 8];

        $sorter = new SorterContext(new BubbleSortStrategy());

        $this->assertEquals($dataset, $sorter->sort($dataset));
    }

    public function testQuickSortStrategy()
    {
        $dataset = [1, 5, 4, 3, 2, 8];

        $sorter = new SorterContext(new QuickSortStrategy());

        $this->assertEquals($dataset, $sorter->sort($dataset));
    }
}
