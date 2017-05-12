<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Iterator\StationList;
use App\Iterator\RadioStation;

class IteratorTest extends TestCase
{
    public function testStationList()
    {
    	$stationList = new StationList();

		$expectedObject1 = $stationList->addStation(new RadioStation(89));
		$expectedObject2 = $stationList->addStation(new RadioStation(101));
		$expectedObject3 = $stationList->addStation(new RadioStation(102));
		$expectedObject4 = $stationList->addStation(new RadioStation(103.2));

		//foreach ($stationList as $station) {
		//	echo $station->getFrequency() . PHP_EOL;
		//}

   		$expectedObject5 = $stationList->removeStation(new RadioStation(89));

		$mock = $this->getMockBuilder(StationList::class)
                     ->setMethods(['addStation'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('addStation')
             ->with($this->identicalTo($expectedObject1));

	    $mock->expects($this->any())
             ->method('addStation')
             ->with($this->identicalTo($expectedObject2));

		$mock->expects($this->any())
             ->method('addStation')
             ->with($this->identicalTo($expectedObject3));

    	$mock->expects($this->any())
             ->method('addStation')
             ->with($this->identicalTo($expectedObject4));

     	$mock->expects($this->any())
             ->method('removeStation')
             ->with($this->identicalTo($expectedObject5));
    }
}
