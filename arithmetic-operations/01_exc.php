<?php

/*

Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

*/

function intChecker(int $first, int $second): bool {
	if ($first === 15 || $second === 15 || $first + $second === 15 || abs($first - $second) === 15) {
		return true;
	} else {
		return false;
	}
}

$x = (int) readline("Please enter first integer: ");
$y = (int) readline("Please enter second integer: ");

if (intChecker($x, $y) === true) {
	echo "Yes, it's true";
} else {
	echo "No, it's false";
}