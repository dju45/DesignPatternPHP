<?php

namespace App\FactoryMethod;

use App\FactoryMethod\HiringManager;
use App\FactoryMethod\InterviewerInterface;
use App\FactoryMethod\CommunityExecutive;

class MarketingManager extends HiringManager
{
    public function makeInterviewer(): InterviewerInterface
    {
        return new CommunityExecutive();
    }
}
