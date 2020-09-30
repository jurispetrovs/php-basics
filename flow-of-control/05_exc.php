<?php

/*

On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).

Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.

Use:

a "nested-if" statement
a "switch-case-default" statement
Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

*/

function PhoneKeyPad(string $string): void
{
    for ($i = 0; $i < strlen($string); $i++) {
        switch ($string[$i]) {
            case 'a':
            case 'b':
            case 'c':
                echo '2 ';
                break;
            case 'd':
            case 'e':
            case 'f':
                echo '3 ';
                break;
            case 'g':
            case 'h':
            case 'i':
                echo '4 ';
                break;
            case 'j':
            case 'k':
            case 'l':
                echo '5 ';
                break;
            case 'm':
            case 'n':
            case 'o':
                echo '6 ';
                break;
            case 'p':
            case 'q':
            case 'r':
            case 's':
                echo '7 ';
                break;
            case 't':
            case 'u':
            case 'v':
                echo '8 ';
                break;
            case 'w':
            case 'x':
            case 'y':
            case 'z':
                echo '9 ';
                break;
            case ' ':
                echo ' ';
                break;
            default:
                echo 'Something went wrong';
                break;
        }
    }
}

$userString = (string)readline('Please enter the string to convert to a sequence of keypad digits: ');

PhoneKeyPad(strtolower($userString));