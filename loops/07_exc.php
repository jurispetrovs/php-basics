<?php

/*

Write a console program in a class named RollTwoDice that prompts the user for a desired sum, then repeatedly rolls two six-sided dice (using a Random object to generate random numbers from 1-6) until the sum of the two dice values is the desired sum. Here is the expected dialogue with the user:

Desired sum: 9
4 and 3 = 7
3 and 5 = 8
5 and 6 = 11
5 and 6 = 11
1 and 5 = 6
6 and 3 = 9

*/

class RollTwoDice
{
    public static function game()
    {
        $desiredSum = (int)readline('Desired sum: ');

        $dice = new RollTwoDice;

        while (true) {
            $firstDice = $dice->Rand();
            $secondDice = $dice->Rand();

            $randSum = $firstDice + $secondDice;

            if ($randSum === $desiredSum) {
                echo $firstDice . ' and ' . $secondDice . ' = ' . $randSum . PHP_EOL;
                return false;
            } else {
                echo $firstDice . ' and ' . $secondDice . ' = ' . $randSum . PHP_EOL;
            }
        }
    }

    public $number = 0;

    public function Rand()
    {
        return $this->number = rand(1, 6);
    }
}

RollTwoDice::game();