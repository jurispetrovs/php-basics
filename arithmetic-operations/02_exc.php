<?php

/*

Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.

*/

function checkOddEven(int $number): void
{
    if ($number % 2 === 0) {
        echo 'The number ' . $number . ' is even' . PHP_EOL;
    } else {
        echo 'The number ' . $number . ' is odd' . PHP_EOL;
    }
    echo 'bye', PHP_EOL;
}

$x = (int)readline('Please enter your integer: ');

checkOddEven($x);