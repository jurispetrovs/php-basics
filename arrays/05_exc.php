<?php

/*

Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.

*/

function display_board($board)
{
    echo " {$board[0][0]}  | {$board[0][1]}  | {$board[0][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[1][0]}  | {$board[1][1]}  | {$board[1][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[2][0]}  | {$board[2][1]}  | {$board[2][2]}  \n";
}

$board = [
	['1', '2', '3'],
	['4', '5', '6'],
	['7', '8', '9']

];

function rowCheck($board) {
	for ($i = 0; $i < 3; $i++) {
		if($board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
			return true;
		}
	}
	return false;
}

function columnCheck($board) {
	for ($i = 0; $i < 3; $i++) { 
		if($board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) {
			return true;
		}
	}
	return false;
}

function diagonalCheck($board) {
	if($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
		return true;
	} elseif ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) {
		return true;
	} else {
		return false;
	}
}

function allChecks($board) {
	return rowCheck($board) || columnCheck($board) || diagonalCheck($board);
}

display_board($board);

$turn = 1; // 1 - first player, 2 - second player
$win = 0; // 0 - no one, 1 - first player, 2 - second player

while (allChecks($board) === false && $moves !== 9) {
	if ($turn === 1) { // first player
		
		$try = false;
		while ($try === false) {
			$playerMove = (int) readline("First player turn [1-9]: ");
			echo PHP_EOL;
			$x = ($playerMove - 1) / 3;
			$y = ($playerMove - 1) % 3;

			if ($board[$x][$y] !== 'X' && $board[$x][$y] !== 'O' && $playerMove > 0 && $playerMove < 10) {
				$board[$x][$y] = 'X';
				$try = true;
			}
		}
		display_board($board);

		$moves++;
		$turn = 2; // second player
		$win = 1;
	} elseif ($turn === 2) {
		
		$try = false;
		while ($try === false) {
			$playerMove = (int) readline("Second player turn [1-9]: ");
			echo PHP_EOL;
			$x = ($playerMove - 1) / 3;
			$y = ($playerMove - 1) % 3;

			if ($board[$x][$y] !== 'X' && $board[$x][$y] !== 'O' && $playerMove > 0 && $playerMove < 10) {
				$board[$x][$y] = 'O';
				$try = true;
			}
		}

		display_board($board);

		$moves++;
		$win = 2;
		$turn = 1; // first player
	}
}

if (allChecks($board) === true) {
	if($win === 1) {
		echo "First player has won" . PHP_EOL;
	} elseif ($win === 2) {
		echo "Second player has won" . PHP_EOL;
	}
} elseif (allChecks($board) !== true && $moves === 9) {
	echo "It's draw" . PHP_EOL;
} else {
	echo "Something went wrong" . PHP_EOL;
}