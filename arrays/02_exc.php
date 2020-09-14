<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

function averageCalc($numbers) {
	return number_format(array_sum($numbers) / count($numbers), 2);
}


echo "Average value of the numbers: " . averageCalc($numbers);