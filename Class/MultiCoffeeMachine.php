<?php

namespace Class;

use Class\Contracts\EspressoCoffeeInterface;
use Class\Contracts\IrishCoffeeInterface;
use Class\Traits\EspressoTrait;
use Class\Traits\IrishCoffeeTrait;

class MultiCoffeeMachine extends CoffeeMaker
{
    use IrishCoffeeTrait;

    use EspressoTrait;
}
