<?php

use Class\EspressoMachine;
use Class\MultiCoffeeMachine;
use Class\IrishCoffeeMachine;

require "../vendor/autoload.php";


$espresso = new EspressoMachine();
$irishCoffee = new IrishCoffeeMachine();

$multiCoffeeMachine = new MultiCoffeeMachine();

var_dump(
    $espresso->makeEspresso(),
    $irishCoffee->makeIrishCoffee(),
    $multiCoffeeMachine->makeIrishCoffee(),
    $multiCoffeeMachine->makeEspresso(),
    $multiCoffeeMachine->makeCoffee(),
);
