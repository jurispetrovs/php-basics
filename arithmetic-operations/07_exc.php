<?php

/*

Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters. The formula in Math notation is

Note: The correct value is -490.5m.

*/

$acceleration = -9.81;
$time = 10;
$v = 0;
$x = 0;

$position = 0.5 * $acceleration * pow($time, 2) + $v * $time + $x;

echo 'The position of an object after falling for 10 seconds is ' . $position . 'm';