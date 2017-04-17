<?php

namespace App\Observer;

use App\Observer\AbstractObserver;
use App\Observer\JobPost;

abstract class AbstractSubject {
    abstract function attach(AbstractObserver $observer);
    abstract function detach(AbstractObserver $observer);
    abstract function notify(JobPost $jobPosting);
}
