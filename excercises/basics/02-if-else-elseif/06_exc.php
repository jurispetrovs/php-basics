<?php

/*

Create a variable $plateNumber that stores your car plate number. Create a switch statement that prints out that its your car in case of your number.

*/

$plateNumber = 'JV5417';

switch ($plateNumber) {
	case 'JV5417':
		echo "Yes, it's true, my car plate number is $plateNumber";
		break;
	default:
		echo "No, it's not my car plate number";
		break;
}