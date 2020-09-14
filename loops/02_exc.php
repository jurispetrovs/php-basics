<?php

$number = (int) readline("Enter the number: ");
$multiply = (int) readline("Enter how many times it multiplies by itself: ");

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$multiplyedNumber = 1;
for ($i = 0; $i < $multiply; $i++) { 
	$multiplyedNumber = $multiplyedNumber * $number;
}
echo $multiplyedNumber;