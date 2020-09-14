<?php

/*

Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

*/

$person[] = new stdClass();
$person[0]->name = 'Cassie';
$person[0]->surname = 'Cote';
$person[0]->age = 17;

function ageCheck($age) {
	if ($age >= 18) {
		echo 'Person has reached 18 years of age'; 
	} else {
		echo 'Person has not reached 18 years of age';
	}
}

ageCheck($person[0]->age);