<?php

namespace Class;

use Class\Contracts\EspressoCoffeeInterface;
use Class\Traits\EspressoTrait;

class EspressoMachine extends CoffeeMaker
{
    use EspressoTrait;

    public function makeEspresso(): string
    {
        return static::class . ' fait un Espresso.';
    }
}
