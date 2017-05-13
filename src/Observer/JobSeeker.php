<?php

namespace App\Observer;

use App\Observer\AbstractObserver;
use App\Observer\AbstractSubject;

class JobSeeker extends AbstractObserver
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(AbstractSubject $subject)
    {
        // Do something with the job posting
        return 'Hi ' . $this->name . '! Update job posted: '. $job->getTitle();
    }

    public function onJobPosted(JobPost $job)
    {
        return 'Hi ' . $this->name . '! New job posted: '. $job->getTitle();
    }
}
