<?php

/*

Write a program that picks a random number from 1-100. Give the user a chance to guess it. If they get it right, tell them so. If their guess is higher than the number, say "Too high." If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

*/

function game(int $playerNumber, int $pcNumber): string
{
    if ($playerNumber === $pcNumber) {
        return 'You guessed it!  What are the odds?!?' . PHP_EOL;
    } elseif ($playerNumber > $pcNumber) {
        return 'Sorry, you are too high.  I was thinking of ' . $pcNumber . PHP_EOL;
    } elseif ($playerNumber < $pcNumber) {
        return 'Sorry, you are too low.  I was thinking of ' . $pcNumber . PHP_EOL;
    }
    return 'error';
}

$pcNumber = (int)rand(1, 100);

echo $pcNumber . PHP_EOL;

$playerNumber = (int)readline('Please enter your number: ');

echo game($playerNumber, $pcNumber);