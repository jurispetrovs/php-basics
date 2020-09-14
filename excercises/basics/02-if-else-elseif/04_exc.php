<?php

/*

By your choice, create condition with 3 checks.
For example, if value is greater than X, less than Y and is an even number.

*/

$value = 10;
$x = 1;
$y = 12;

if ($value > $x && $value < $y && $value % 2 == 0) {
	echo "The value $value is greater than $x, less than $y and is an even number";
} else {
	echo "The number $value does not fit the conditions";
}