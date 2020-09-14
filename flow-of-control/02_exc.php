<?php

echo "Enter the number: ";
$a = (int) readline();

//todo print if number is positive or negative

if ($a < 0) {
	echo "The number {$a} is negative";
} elseif($a > 0) {
	echo "The number {$a} is positive";
} else {
	echo "The number is zero";
}