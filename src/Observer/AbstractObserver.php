<?php

namespace App\Observer;

abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject);
}
