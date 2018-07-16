<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Observer\JobSeeker;
use App\Observer\JobPostings;
use App\Observer\JobPost;

class ObserverTest extends TestCase
{
    public function testObserverJob()
    {
        $johnDoe = new JobSeeker('John Doe');
        $jobPostings = new JobPostings();
        $jobPostings->attach($johnDoe);

        $jobPostings->addJob(new JobPost('Software Engineer'));

        $jobPostings->addJob(new JobPost('Developer PHP'));

        //$jobPostings->detach($johnDoe);

        //$jobPostings->addJob(new JobPost('Web Design'));

        $mock = $this->getMockBuilder(JobSeeker::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['update'])
                     ->getMock();

        $mock->expects($this->any(1))->method('update');

        $jobPostings->attach($mock);

        $this->assertTrue(true);
    }

    public function testObserverRemoveListenersMethod()
    {
        $johnDoe = new JobSeeker('John Doe');
        $jobPostings = new JobPostings();
        $jobPostings->attach($johnDoe);

        $jobPostings->addJob(new JobPost('Software Engineer'));

        $jobPostings->addJob(new JobPost('Developer PHP'));

        //$jobPostings->detach($johnDoe);

        //$jobPostings->addJob(new JobPost('Web Design'));

        $mock1 = $this->getMockBuilder(JobSeeker::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['update'])
                     ->getMock();

        $mock2 = $this->getMockBuilder(JobSeeker::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['update'])
                     ->getMock();

        $mock1->expects($this->any(1))->method('update');
        $mock2->expects($this->never())->method('update');

        $jobPostings->attach($mock1);
        $jobPostings->attach($mock2);
        $jobPostings->detach($mock2);
    }
}
