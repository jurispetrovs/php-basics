<?php

/*

Using PHP in-built functions create a program that accepts 1 argument - filename.
Create a file with the filename of your choice and store information with comma separated (example. John, Doe, 10)
Using PHP in-built functions read information from this file and create an object based on information from the file.
Output the name, surname and age of the person in the output.

*/

$data = preg_split('/[\s,]+/', file_get_contents('04-1_exc.txt'));

$persons = [];
$personsIndex = 0;

for ($i = 0; $i < count($data); $i += 3) {
    $persons[$personsIndex] = new stdClass();
    $persons[$personsIndex]->name = $data[$i];
    $personsIndex++;
}

$personsIndex = 0;
for ($j = 1; $j < count($data); $j += 3) {
    $persons[$personsIndex]->surname = $data[$j];
    $personsIndex++;
}

$personsIndex = 0;
for ($k = 2; $k < count($data); $k += 3) {
    $persons[$personsIndex]->age = (int)$data[$k];
    $personsIndex++;
}

foreach ($persons as $person) {
    echo $person->name . ' ' . $person->surname . ' ' . $person->age . PHP_EOL;
}