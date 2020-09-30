<?php

/*

Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
Then, modify your program using an integer class constant so that it can create a similar figure of any size. For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

////////\\\\\\\\
////********\\\\
****************
And the figure below has a size of 7:

////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////********\\\\\\\\\\\\\\\\\\\\
////////////////****************\\\\\\\\\\\\\\\\
////////////************************\\\\\\\\\\\\
////////********************************\\\\\\\\
////****************************************\\\\
************************************************

*/

class AsciiFigure
{
    public const size = 5;

    public static function draw(): void
    {
        $stringSize = (self::size - 1) * 8;
        $line = 0;
        while ($line < self::size) {
            if ($line === 0) {
                for ($i = 0; $i < $stringSize / 2; $i++) {
                    echo '/';
                }
                for ($i = 0; $i < $stringSize / 2; $i++) {
                    echo '\\';
                }
                echo PHP_EOL;
            } else {
                for ($i = 0; $i < (($stringSize - 8 * $line) / 2); $i++) {
                    echo '/';
                }
                for ($i = 0; $i < (8 * $line); $i++) {
                    echo '*';
                }
                for ($i = 0; $i < (($stringSize - 8 * $line) / 2); $i++) {
                    echo '\\';
                }
                echo PHP_EOL;
            }
            $line++;
        }
    }
}

AsciiFigure::draw();

/*		Without Class Const      */

/*
class AsciiFigure
{
    public const size = 5;

    public static function draw(int $size): void
    {
        $stringSize = ($size - 1) * 8;
        $line = 0;
        while ($line < $size) {
            if ($line === 0) {
                for ($i = 0; $i < $stringSize / 2; $i++) {
                    echo '/';
                }
                for ($i = 0; $i < $stringSize / 2; $i++) {
                    echo '\\';
                }
                echo PHP_EOL;
            } else {
                for ($i = 0; $i < (($stringSize - 8 * $line) / 2); $i++) {
                    echo '/';
                }
                for ($i = 0; $i < (8 * $line); $i++) {
                    echo '*';
                }
                for ($i = 0; $i < (($stringSize - 8 * $line) / 2); $i++) {
                    echo '\\';
                }
                echo PHP_EOL;
            }
            $line++;
        }
    }
}

$size = (int)readline('Please enter the size of figure [min 2]: ');

AsciiFigure::draw($size);
*/