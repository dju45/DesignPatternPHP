<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\FactoryMethod\DevelopmentManager;
use App\FactoryMethod\MarketingManager;

class FactoryMethodTest extends TestCase
{
    public function testInterviewer()
    {
		$devManager = new DevelopmentManager();
        $this->assertEquals('Asking about design patterns!', $devManager->takeInterview()); // Output: Asking about design patterns

        $marketingManager = new MarketingManager();
		$this->assertEquals('Asking about community building', $marketingManager->takeInterview()); // Output: Asking about community building
    }
}
