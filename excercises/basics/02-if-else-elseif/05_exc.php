<?php

/*

Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
Range should be stored within the 2 separated variables $y and $z.

*/

$y = 27;
$z = 59;
$var = 50;

if ($var > $y && $var < $z) {
	echo 'Correct';
} else {
	echo 'Incorrect';
}