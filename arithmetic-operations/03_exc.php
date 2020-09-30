<?php

/*

Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily. Also compute and display the average. The output shall look like:

The sum of 1 to 100 is 5050
The average is 50.5

*/

function sumOfInteger(int $min, int $max): int
{
    $sum = 0;
    for ($i = $min; $i <= $max; $i++) {
        $sum += $i;
    }
    return $sum;
}

$min = (int)readline('Please enter min integer: ');
$max = (int)readline('Please enter max integer: ');

echo 'The sum of ' . $min . ' to ' . $max . ' is ' . sumOfInteger($min, $max) . PHP_EOL . 'The average is ' . (sumOfInteger($min, $max) / (($max - $min) + 1));


//	SECOND SOLUTION (WORKS) //

/*
$min = (int)readline('Please enter min integer: ');
$max = (int)readline('Please enter max integer: ');

$arr = range($min, $max);

echo 'The sum of ' . $min . ' to ' . $max . ' is ' . array_sum($arr) . PHP_EOL . 'The average is ' . array_sum($arr) / count($arr);
*/