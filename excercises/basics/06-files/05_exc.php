<?php

/*

Create a .csv file that stores (ID, name, surname, age) of multiple persons.
Create a program that accepts 1 argument (id of the user) and displays the user information if the user has been found.
If the user has not been found, output that in the console.

*/

$file = fopen('05-1_exc.csv', 'r');

$data = [];
$keys = ['id', 'name', 'surname', 'age'];

while (($line = fgetcsv($file, 0, ';')) == true) {
    $data[] = $line;
}

fclose($file);

foreach ($data as &$person) {
    $person = array_combine($keys, $person);
}

$searchId = readline('Please enter the ID of user: ');
$userExist = false;

foreach ($data as $value) {
    if (in_array($searchId, $value)) {
        echo 'Yes, we have the user with ' . $value['id'] . " id. It's " . $value['name'] . ' '
            . $value['surname'] . ', ' . $value['age'] . ' years old' . PHP_EOL;

        $userExist = true;
    }
}

if ($userExist === false) {
    echo 'I am sorry, user with ' . $searchId . " id don't exist" . PHP_EOL;
}