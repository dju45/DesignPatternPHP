<?php

namespace App\TemplateMethod;

use App\TemplateMethod\Builder;

class IosBuilder extends Builder
{
    public function test()
    {
        return 'Running ios tests';
    }

    public function lint()
    {
        return 'Linting the ios code';
    }

    public function assemble()
    {
        return 'Assembling the ios build';
    }

    public function deploy()
    {
        return 'Deploying ios build to server';
    }
}
