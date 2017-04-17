<?php

namespace App\FactoryMethod;

use App\FactoryMethod\InterviewerInterface;

class CommunityExecutive implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about community building';
    }
}
