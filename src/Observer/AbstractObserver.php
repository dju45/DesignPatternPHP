<?php

namespace App\Observer;

use App\Observer\AbstractSubject;

abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject);
}
