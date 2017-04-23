<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Factory\ShapeFactory;

class FactoryTest extends TestCase
{
    public function testRectangle()
    {
        $rectangle = ShapeFactory::makeShape(100,200);

        $this->assertEquals(100, $rectangle->getWidth());
        $this->assertEquals(200, $rectangle->getHeight());
    }
}
