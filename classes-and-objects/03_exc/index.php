<?php

require_once 'vendor/autoload.php';

use App\Car;
use App\FuelGauge;
use App\Odometer;

$car = new Car('JV-5417', 70, new FuelGauge(5), new Odometer(999976));

while ($car->getFuelGauge()->getFuel() > 0) {
    $car->getOdometer()->drive($car->getFuelGauge());

    echo $car->getPlateNumber() . ' | ';
    echo $car->getFuelGauge()->getFuel() . 'L | ';
    echo $car->getOdometer()->getMileage() . ' km total' . PHP_EOL;

    if ($car->getFuelGauge()->getFuel() == 0) {
        while ($car->getFuelGauge()->getFuel() != $car->getTank())
            $car->getFuelGauge()->refuelingFuel($car);
    }

    sleep(1);
}