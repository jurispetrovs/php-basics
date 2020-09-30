<?php

/*

calculate an average value of the numbers

*/

$numbers = [20, 30, 25, 35, -16, 60, -100];

function averageCalc($numbers): float
{
    return number_format(array_sum($numbers) / count($numbers), 2);
}

echo 'Average value of the numbers: ' . averageCalc($numbers);