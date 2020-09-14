<?php

/*

Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.

*/

$persons = [
	[
		'name' => 'Ellie',
		'surname' => 'Flower',
		'age' => 23,
		'birthday' => '23 march 1997'
	],
	[
		'name' => 'Cassie',
		'surname' => 'Cote',
		'age' => 56,
		'birthday' => '4 juny 1964'
	],
	[
		'name' => 'Vivien',
		'surname' => 'Mccoy',
		'age' => 41,
		'birthday' => '21 november 1978'
	],
	[
		'name' => 'Kylo',
		'surname' => 'Everett',
		'age' => 31,
		'birthday' => '29 august 1989'
	]
];

foreach ($persons as $person) {
	echo "Name: {$person['name']} | Surname: {$person['surname']} | Age: {$person['age']} | Birthday: {$person['birthday']}" . PHP_EOL;
}