<?php

namespace App\FactoryMethod;

use App\FactoryMethod\HiringManager;
use App\FactoryMethod\InterviewerInterface;
use App\FactoryMethod\Developer;

class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): InterviewerInterface
    {
        return new Developer();
    }
}
