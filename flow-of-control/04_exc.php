<?php

/*

Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".

Use:

a "nested-if" statement
a "switch-case-default" statement.

*/

function ifStatement(int $dayNumber): void
{
    if ($dayNumber === 0) {
        echo 'Sunday' . PHP_EOL;
    } elseif ($dayNumber === 1) {
        echo 'Monday' . PHP_EOL;
    } elseif ($dayNumber === 2) {
        echo 'Tuesday' . PHP_EOL;
    } elseif ($dayNumber === 3) {
        echo 'Wednesday' . PHP_EOL;
    } elseif ($dayNumber === 4) {
        echo 'Thursday' . PHP_EOL;
    } elseif ($dayNumber === 5) {
        echo 'Friday' . PHP_EOL;
    } elseif ($dayNumber === 6) {
        echo 'Saturday' . PHP_EOL;
    } else {
        echo 'Not a valid day' . PHP_EOL;
    }
}

function switchStatement(int $dayNumber): void
{
    switch ($dayNumber) {
        case 0:
            echo 'Sunday' . PHP_EOL;
            break;
        case 1:
            echo 'Monday' . PHP_EOL;
            break;
        case 2:
            echo 'Tuesday' . PHP_EOL;
            break;
        case 3:
            echo 'Wednesday' . PHP_EOL;
            break;
        case 4:
            echo 'Thursday' . PHP_EOL;
            break;
        case 5:
            echo 'Friday' . PHP_EOL;
            break;
        case 6:
            echo 'Saturday' . PHP_EOL;
            break;
        default:
            echo 'Not a valid day' . PHP_EOL;
            break;
    }
}

$dayNumber = (int)readline('Please enter day number from 0 to 6: ');

ifStatement($dayNumber);
switchStatement($dayNumber);