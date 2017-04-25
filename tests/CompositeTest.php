<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Composite\Developer;
use App\Composite\Designer;
use App\Composite\Organization;

class CompositeTest extends TestCase
{
    public function testEmployees()
    {
        $john = new Developer('John Doe', 12000);
        $jane = new Designer('Jane Doe', 15000);

        $organization = new Organization();
        $organization->addEmployee($john);
        $organization->addEmployee($jane);

        $this->assertEquals(27000, $organization->getNetSalaries());
    }
}
