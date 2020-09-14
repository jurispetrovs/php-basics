<?php

/*

Write a program that reads an positive integer and count the number of digits the number has.

*/

function countOfDicits(int $number) {
	return "The number of digits the number has is " . strlen($number);
}

$number = (int) readline("Please enter your number: ");
echo countOfDicits($number);