<?php

namespace App\TemplateMethod;

use App\TemplateMethod\Builder;

class AndroidBuilder extends Builder
{
    public function test()
    {
        return 'Running android tests';
    }

    public function lint()
    {
        return 'Linting the android code';
    }

    public function assemble()
    {
        return 'Assembling the android build';
    }

    public function deploy()
    {
        return 'Deploying android build to server';
    }
}
