<?php

/*	Numeric Array	*/

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo 'Original numeric array: ';
foreach ($numbers as $number) {
    echo $number . ' ';
}
echo PHP_EOL;

echo 'Sorted numeric array: ';
sort($numbers, SORT_NUMERIC);
foreach ($numbers as $number) {
    echo $number . ' ';
}
echo PHP_EOL . PHP_EOL;

/*	String Array  */

$words = [
    'Java',
    'Python',
    'PHP',
    'C#',
    'C Programming',
    'C++'
];

echo 'Original string array: ';
foreach ($words as $word) {
    echo $word . ' ';
}
echo PHP_EOL;

echo 'Sorted string array: ';
sort($words, SORT_STRING);
foreach ($words as $word) {
    echo $word . ' ';
}