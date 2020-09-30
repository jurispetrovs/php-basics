<?php

/*

Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro. Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

*/

$fruits = [
    [
        'apple' => 11,
        'banana' => 8,
        'grape' => 2,
        'melon' => 9,
        'watermelon' => 16
    ]
];

function weightCheck(int $weight): string
{
    if ($weight > 10) {
        return 'over 10 kg';
    } else {
        return 'less 10 kg';
    }
}

$shippingCosts = [
    'over 10 kg' => 2,
    'less 10 kg' => 1
];

foreach ($fruits as $fruit) {
    foreach ($fruit as $key => $value) {
        echo 'Delivery of ' . $key . ' in the amount of ' . $value . ' kg will cost '
            . $shippingCosts[weightCheck($value)] . ' euro' . PHP_EOL;
    }
}