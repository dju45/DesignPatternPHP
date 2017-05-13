<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\ChainofResponsibility\Bank;
use App\ChainofResponsibility\Paypal;
use App\ChainofResponsibility\Bitcoin;

class ChainOfResponsibilityTest extends TestCase
{
    public function testAccount()
    {
        // Let's prepare a chain like below
        // //      $bank->$paypal->$bitcoin
        // //
        // // First priority bank
        // //      If bank can't pay then paypal
        // //      If paypal can't pay then bit coin
        //
        $bank = new Bank(100);          // Bank with balance 100
        $paypal = new Paypal(200);      // Paypal with balance 200
        $bitcoin = new Bitcoin(300);    // Bitcoin with balance 300

        $expectedObject1 = $bank->setNext($paypal);
        $expectedObject2 = $paypal->setNext($bitcoin);

        // // Let's try to pay using the first priority i.e. bank
        $bank->pay(259);
        //
        // // Output will be
        // // ==============
        // // Cannot pay using bank. Proceeding ..
        // // Cannot pay using paypal. Proceeding ..:
        // // Paid 259 using Bitcoin!

		$mock1 = $this->getMockBuilder(Bank::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['setNext'])
                     ->getMock();

        $mock1->expects($this->any())
              ->method('setNext')
              ->will($this->returnValue(200))
              ->with($this->identicalTo($expectedObject1));

		$mock2 = $this->getMockBuilder(Paypal::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['setNext'])
                     ->getMock();

        $mock2->expects($this->any())
             ->method('setNext')
             ->will($this->returnValue(300))
             ->with($this->identicalTo($expectedObject2));
    }
}
