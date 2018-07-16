<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\TemplateMethod\AndroidBuilder;
use App\TemplateMethod\IosBuilder;

class TemplateMethodTest extends TestCase
{
    public function testAndroidBuilder()
    {
        $androidBuilder = new AndroidBuilder();
        $expectedObject = $androidBuilder->build();

        // Output:
        // // Running android tests
        // // Linting the android code
        // // Assembling the android build
        // // Deploying android build to server

        $mock = $this->getMockBuilder(AndroidBuilder::class)
                     ->setMethods(['build'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('build')
             ->with($this->identicalTo($expectedObject));

        $this->assertTrue(true);
    }

    public function testIosBuilder()
    {
        $iosBuilder = new IosBuilder();
        $expectedObject = $iosBuilder->build();

        // Output:
        // // Running ios tests
        // // Linting the ios code
        // // Assembling the ios build
        // // Deploying ios build to server

        $mock = $this->getMockBuilder(IosBuilder::class)
                     ->setMethods(['build'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('build')
             ->with($this->identicalTo($expectedObject));

        $this->assertTrue(true);
    }
}
