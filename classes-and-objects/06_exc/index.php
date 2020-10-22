<?php

require_once 'EnergyDrink.php';
require_once 'CitrusFlavored.php';

$citrusFlavored = new CitrusFlavored(12467, 0.14, 0.64);

echo "Total number of people surveyed: " . $citrusFlavored->getSurveyed() . PHP_EOL;
echo "Approximately " . $citrusFlavored->getDrinkers() . " bought at least one energy drink" . PHP_EOL;
echo $citrusFlavored->getDrinkersPreferCitrus() . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;