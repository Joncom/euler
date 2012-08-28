<?php

/**************************
/
/ Problem 5 (http://projecteuler.net/problem=5)
/
/ "2520 is the smallest number that can be 
/ divided by each of the numbers from 1 to 10 
/ without any remainder.
/
/ What is the smallest positive number that is 
/ evenly divisible by all of the numbers from 
/ 1 to 20?"
/
/ Solution: 232792560
/
**************************/

// My first, brute force attempt. 
// Took 15+ minutes to execute.

set_time_limit(1500);

function isDivisible($min, $max, $num) {
	for ($i=$min; $i<=$max; $i++) {
		if($num % $i != 0) return false;
	}
	return true;
}

for ($i=1; ; $i++) {
	if(isDivisible(1,20,$i)) {
		echo "The answer is ".$i.".";
		die();
	}
}

?>