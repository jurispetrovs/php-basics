<?php

/*

Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line. The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5, "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on. The output shall look like:

*/

function cozaLozaWoza(): void
{
    $number = 1;
    while ($number <= 110) {
        for ($i = 0; $i <= 10; $i++) {
            if ($number % 3 === 0 && $number % 5 === 0) {
                echo 'CozaLoza';
            } elseif ($number % 3 === 0 && $number % 7 === 0) {
                echo 'CozaWoza';
            } elseif ($number % 7 === 0) {
                echo 'Woza';
            } elseif ($number % 3 === 0) {
                echo 'Coza';
            } elseif ($number % 5 === 0) {
                echo 'Loza';
            } else {
                echo $number;
            }
            echo ' ';
            $number++;
        }
        echo PHP_EOL;
    }
}

cozaLozaWoza();