<?php

namespace Class;

abstract class CoffeeMaker
{
    public function makeCoffee()
    {
        return static::class . ' fait un café.';
    }
}
