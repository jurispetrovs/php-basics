<?php

/*

Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
Area = π * r * 2
Use Math.PI for π and r for the radius of the circle
A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
Area = Length x Width
A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle. Use the following formula:
Area = Base x Height x 0.5
The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s length or width, or the triangle’s base or height.

Next write a program to test the class, which displays the following menu and responds to the user’s selection:

Geometry calculator:

Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit
Enter your choice (1-4):
Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

*/

class Geometry {
	public static function circleArea(float $radius) {
		if ($radius < 0) {
			return "The circle’s radius can't be negative" . PHP_EOL;
		} else {
			return number_format(M_PI * pow($radius, 2), 2);
		}
	}

	public static function rectangleArea(float $lengt, float $width) {
		if ($lengt < 0 || $width < 0) {
			return "The rectangle’s length or width can't be negative" . PHP_EOL;
		} else {
			return $lengt * $width;
		}
	}

	public static function triangleArea(float $base, float $height) {
		if ($base < 0 || $height < 0) {
			return "The triangle’s base or height can't be negative" . PHP_EOL;
		} else {
			return $base * $height * 0.5;
		}
	}
}

while(true) {

	echo "Geometry Calculator" . PHP_EOL;
	echo "1. Calculate the Area of a Circle" . PHP_EOL;
	echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
	echo "3. Calculate the Area of a Triangle" . PHP_EOL;
	echo "4. Quit" . PHP_EOL;
	$button = readline("Enter your choice (1-4): ");
	echo PHP_EOL;
	
	switch ($button) {
	case 1:
		echo "Calculating the Area of a Circle" . PHP_EOL . PHP_EOL;
		for ($i = 0; $i < 5; $i++) {
			$radius = rand(1, 100);
			echo "Test [" . ($i + 1) . "]: Radius = {$radius}. Area of a Circle = " . Geometry::circleArea($radius) . PHP_EOL;
		}
		echo PHP_EOL;
		break;
	case 2:
		for ($i = 0; $i < 5 ; $i++) { 
			$lengt = rand(1, 100);
			$width = rand(1, 100);
			echo "Test [" . ($i + 1) . "]: Length = {$lengt}. Width = {$width}. Area of a rectangle = " . Geometry::rectangleArea($lengt, $width) . PHP_EOL;
		}
		echo PHP_EOL;
		break;
	case 3:
	for ($i = 0; $i < 5 ; $i++) { 
			$base = rand(1, 100);
			$height = rand(1, 100);
			echo "Test [" . ($i + 1) . "]: Base = {$base}. Height = {$height}. Area of a triangle = " . Geometry::triangleArea($base, $height) . PHP_EOL;
		}
		echo PHP_EOL;
		break;
	case 4:
		echo "Exit" . PHP_EOL;
		return false;
		break;
	default:
		echo PHP_EOL . "Wrong choice. Try Again !" . PHP_EOL . PHP_EOL;
		break;
	}
}