<?php

/*

Write a program that reads an positive integer and count the number of digits the number has.

*/

function countOfDigits(int $number): string
{
    return 'The number of digits the number has is ' . strlen($number);
}

$number = (int)readline('Please enter your number: ');

echo countOfDigits($number);