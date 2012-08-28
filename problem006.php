<?php

/**************************
/
/ Problem 6 (http://projecteuler.net/problem=6)
/
/ "The sum of the squares of the first ten 
/ natural numbers is,
/ 
/ 12 + 22 + ... + 102 = 385
/ The square of the sum of the first ten 
/ natural numbers is,
/ 
/ (1 + 2 + ... + 10)2 = 552 = 3025
/ Hence the difference between the sum of 
/ the squares of the first ten natural 
/ numbers and the square of the sum is 
/ 3025 - 385 = 2640.
/ 
/ Find the difference between the sum of 
/ the squares of the first one hundred 
/ natural numbers and the square of the sum."
/
**************************/

$count = 100;
$sumOfSquares = 0;
$squareOfSums = 0;

// find the sum of the square of naturals
for ($i=1; $i<=$count; $i++) {
	$sumOfSquares += pow($i, 2);
}

// find the square of the sum of naturals
for ($i=1; $i<=$count; $i++) {
	$squareOfSums += $i;
}
$squareOfSums = pow($squareOfSums, 2);

echo  $squareOfSums - $sumOfSquares;

?>