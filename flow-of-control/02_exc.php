<?php

/*

print if number is positive or negative

*/

$a = (int)readline('Enter the number: ');

if ($a < 0) {
    echo 'The number ' . $a . ' is negative';
} elseif ($a > 0) {
    echo 'The number ' . $a . ' is positive';
} else {
    echo 'The number is zero';
}