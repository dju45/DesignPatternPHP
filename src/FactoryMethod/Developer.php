<?php

namespace App\FactoryMethod;

use App\FactoryMethod\InterviewerInterface;

class Developer implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about design patterns!';
    }
}
