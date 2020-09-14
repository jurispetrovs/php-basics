<?php

/*

Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age. Print out if the person has reached age of 18 or not.

*/

$person = new stdClass();
$person->name = 'Ellie';
$person->surname = 'Flower';
$person->age = 23;

function ageCheck($age) {
	if ($age >= 18) {
		echo 'Person has reached 18 years of age'; 
	} else {
		echo 'Person has not reached 18 years of age';
	}
}

ageCheck($person->age);