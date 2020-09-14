<?php

/*

Write a program to play a word-guessing game like Hangman.

It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed (either only the incorrect guesses or all guesses).

*/

function displayGame($hidenWord, $mises) {
	echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
	echo "Word: " . implode(" ", $hidenWord) . PHP_EOL;
	echo "Mises: " . $mises . PHP_EOL;
}

function displayIfWin($hidenWord, $mises) {
	echo "Word: " . implode(" ", $hidenWord) . PHP_EOL;
	echo "Mises: " . $mises . PHP_EOL;
	echo "YOU GOT IT! " . PHP_EOL;
	echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL . PHP_EOL;
}

function checkIfWin($hidenWord, $randWord, $mises) {
	if (implode("", $hidenWord) === $randWord) {
		displayIfWin($hidenWord, $mises);
		return true;
	}
	return false;
}

function game($randWord, &$hidenWord, &$mistakes, &$mises) {
	$userLetter = readline("Guess: ");

	for ($i = 0; $i < strlen($randWord); $i++) { 
		if ($userLetter === $randWord[$i]) {
			$hidenWord[$i] = $randWord[$i];
		}
	}
	$wordCheck = strpos(implode("", $hidenWord), $userLetter);

	if ($wordCheck === false) {
		$mises = str_pad($mises, (strlen($mises) + 1) , $userLetter);
		$mistakes++;
	}
}

$words = ['absurd', 'blitz', 'unknown', 'transcript', 'peekaboo', 'zombie'];
$randWord = $words[array_rand($words)]; //rand
echo "My Word: " . $randWord . PHP_EOL;

$hidenWord = array_fill(0, strlen($randWord), '_'); // Word: _ _ _ _ _

$mises = ''; //Mises: 
$mistakes = 0;
while ($mistakes < 6) {
	displayGame($hidenWord, $mises);	
	game($randWord, $hidenWord, $mistakes, $mises);
	echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL . PHP_EOL;
	if (checkIfWin($hidenWord, $randWord, $mises) === true) {
		break;
	}
}


//		First Variant (without function's)		//

/*$words = ['absurd', 'blitz', 'unknown', 'transcript', 'peekaboo', 'zombie'];
$randWord = $words[array_rand($words)]; //rand
echo "My Word: " . $randWord . PHP_EOL;

$hidenWord = array_fill(0, strlen($randWord), '_'); // Word: _ _ _ _ _

$mises = ''; //Mises: 
$mistakes = 0;
while ($mistakes < 6) {
	echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
	echo "Word: " . implode(" ", $hidenWord) . PHP_EOL;
	echo "Mises: " . $mises . PHP_EOL;
	$userLetter = readline("Guess: ");

	for ($i = 0; $i < strlen($randWord); $i++) { 
		if ($userLetter === $randWord[$i]) {
			$hidenWord[$i] = $randWord[$i];
		}
	}
	$wordCheck = strpos(implode("", $hidenWord), $userLetter);

	if ($wordCheck === false) {
		$mises = str_pad($mises, (strlen($mises) + 1) , $userLetter);
		$mistakes++;
	}
	echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL . PHP_EOL;
	
	if (implode("", $hidenWord) === $randWord) {
		echo "Word: " . implode(" ", $hidenWord) . PHP_EOL;
		echo "Mises: " . $mises . PHP_EOL;
		echo "YOU GOT IT! " . PHP_EOL;
		break;
	}
}*/



