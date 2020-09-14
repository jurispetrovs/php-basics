<?php

/*

Write a program that calculates and displays a person's body mass index (BMI). A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2. Where weight is measured in pounds and height is measured in inches. Display a message indicating whether the person has optimal weight, is underweight, or is overweight. A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25. If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.

Your program must accept metric units.

*/

function BMIcalculator(float $weightKg, float $heightCm) {
	$weightPounds = $weightKg * 2.205;
	$heightInches = $heightCm / 2.54;
	return number_format($weightPounds * 703 / pow($heightInches, 2), 1);
}

$weightKg = (float) readline("Please enter your weight [KG]: ");
$heightCm = (float) readline("Please enter your height [CM]: ");

$BMI = BMIcalculator($weightKg, $heightCm);

if (18.5 < $BMI && $BMI < 25) {
	echo "You weight is considered optimal. Your BMI is " . $BMI;
} elseif ($BMI < 18.5) {
	echo "You are considered underweight. Your BMI is " . $BMI;
} else {
	echo "You are considered overweight. Your BMI is " . $BMI;
}