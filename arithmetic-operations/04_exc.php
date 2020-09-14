<?php

/*

Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.

*/

function integersFactorial (int $n): int {
	return gmp_fact($number);
	//return $n ? $n * integersFactorial($n-1) : 1;
}

echo integersFactorial(10);