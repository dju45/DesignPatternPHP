<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\State\TextEditor;
use App\State\BaseDefault;
use App\State\UpperCase;
use App\State\LowerCase;

class StateTest extends TestCase
{
    public function testTextEditor()
    {
        $editor = new TextEditor(new BaseDefault());
		$this->assertEquals('First line', $editor->type('First line'));

        $editor->setState(new UpperCase());
		$this->assertEquals('SECOND LINE', $editor->type('Second line'));
		$this->assertEquals('THIRD LINE', $editor->type('Third line'));

        $editor->setState(new LowerCase());
		$this->assertEquals('fourth line', $editor->type('Fourth line'));
		$this->assertEquals('fifth line', $editor->type('Fifth line'));
    }

}
