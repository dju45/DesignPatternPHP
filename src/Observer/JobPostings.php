<?php

namespace App\Observer;

use App\Observer\AbstractObserver;
use App\Observer\AbstractSubject;

class JobPostings extends AbstractSubject
{
    protected $observers = [];

    public function attach(AbstractObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(AbstractObserver $observer)
    {
		foreach	($this->observers as $key => $observer) {
			unset($this->observers[$key]);
		}
	}

    public function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}
