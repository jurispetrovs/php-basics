<?php

/*

check if an array contains a value user entered

*/

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo 'Enter the value to search for: ';

$userValue = (int)readline('Enter the number you want to try to find: ');

if (in_array($userValue, $numbers)) {
    echo 'Yes, there is such a value' . PHP_EOL;
} else {
    echo 'No, there is no such value' . PHP_EOL;
}