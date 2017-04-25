<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Bridge\Phone;
use App\Bridge\Whatsapp;

class BridgeTest extends TestCase
{
    public function testMessageDevice()
    {
        $phone = new Phone();
        $phone->setSender(new Whatsapp());

        $this->assertEquals("Hey Tony", $phone->send("Hey Tony"));
    }
}

