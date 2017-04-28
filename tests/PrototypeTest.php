<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Prototype\Sheep;

class Prototype extends TestCase
{
    public function testSheepObjectAndCloned()
    {
        $original = new Sheep('Jolly');

        $this->assertEquals('Jolly', $original->getName());
        $this->assertEquals('Mountain Sheep', $original->getCategory());

        $cloned = clone $original;
        $cloned->setName('Dolly');
        $this->assertInstanceOf(Sheep::class, $cloned);
        $this->assertEquals('Dolly', $cloned->getName());
        $this->assertEquals('Mountain Sheep', $cloned->getCategory());
    }

    public function testSheepCloned()
    {
        $original = new Sheep('Jolly');

        for ($i=0;$i<5;$i++) {
            $cloned = clone $original;
            $cloned->setName('Dolly');
            $this->assertInstanceOf(Sheep::class, $cloned);
        }

    }

}
