<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Memento\Editor;

class MementoTest extends TestCase
{
    public function testEditor()
    {
        $editor = new Editor();
        $editor->type('This is the first sentence.');
        $editor->type('This is second.');

        $saved = $editor->save();

        $editor->type('And this is third.');

        $this->assertEquals(' This is the first sentence. This is second. And this is third.', $editor->getContent());

        $editor->restore($saved);

        $this->assertEquals(' This is the first sentence. This is second.', $editor->getContent());
    }
}
