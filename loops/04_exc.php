<?php

/*

Write a console program in a class named FizzBuzz that prompts the user for an integer, then prints all of the numbers from one to that integer, separated by spaces.

Use a loop to print the numbers.

But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".

For numbers which are multiples of both three and five print "FizzBuzz".

Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:

*/

class FizzBuzz
{
    public static function printFizzBuzz(int $max): void
    {
        $number = 1;
        while ($number <= $max) {
            for ($i = 0; $i < 20; $i++) {
                if ($number % 3 === 0 && $number % 5 === 0) {
                    echo 'FizzBuzz';
                } elseif ($number % 3 === 0) {
                    echo 'Fizz';
                } elseif ($number % 5 === 0) {
                    echo 'Buzz';
                } else {
                    echo $number;
                }
                echo ' ';
                $number++;
            }
            echo PHP_EOL;
        }
    }
}

$max = (int)readline('Please enter the number up to which to print numbers: ');

FizzBuzz::printFizzBuzz($max);