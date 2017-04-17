<?php

namespace App\FactoryMethod;

use App\FactoryMethod\InterviewerInterface;

abstract class HiringManager
{
    // Factory method
    abstract public function makeInterviewer(): InterviewerInterface;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}
