<?php

/**************************
/
/ Problem 3 (http://projecteuler.net/problem=3)
/
/ "The prime factors of 13195 are 5, 7, 13 and 29.

/ What is the largest prime factor of the number 
/ 600851475143 ?"
/
/ Solution: 6857
/
**************************/

function FindLargestPrimeFactor($n) {
	if(bcmod($n, '2') == 0) {
		echo "Can divide $n by 2 \n";
		return FindLargestPrimeFactor(bcdiv($n, '2'));
	}
	for ($i=3; $i<sqrt($n); $i+=2) {
		if (bcmod($n, $i) == 0) {
			echo "Can divide $n by $i \n";
			return FindLargestPrimeFactor(bcdiv($n, $i));
		}
	}
	return $n;
}

$n = "600851475143";
echo "\$n = " . $n . "\n";
echo "Largest prime factor of $n is: " . FindLargestPrimeFactor($n);

?>