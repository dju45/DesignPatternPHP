<?php

namespace App\Factory;

use App\Factory\ShapeInteface;
use App\Factory\Rectangle;

class ShapeFactory
{
    public static function makeShape($width, $height)
    {
        return new Rectangle($width, $height);
    }
}
