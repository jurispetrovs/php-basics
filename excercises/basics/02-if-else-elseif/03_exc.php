<?php

/*

Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

*/

$string = 'hello';

if ($string === 'hello') {
	echo "$string world";
} else {
	echo "The word is not a 'hello'";
}