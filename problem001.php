<?php
function getTime()
    {
    $a = explode (' ',microtime());
    return(double) $a[0] + $a[1];
    }
$Start = getTime();
?>





<?php

/**************************
/
/ Problem 1 (http://projecteuler.net/problem=1)
/
/ If we list all the natural numbers below 10 that
/ are multiples of 3 or 5, we get 3, 5, 6 and 9.
/ The sum of these multiples is 23."
/
/ Find the sum of all the multiples of 3 or 5 below 1000.
/
**************************/

$allowMultiples = array(3, 5); // allowable multiples
$maxRange = 1000; // any positive integer
$metCriteria = array(); // store numbers to later sum
$sum = 0; // sum of numbers that meet criteria

for ($i=1; $i<$maxRange; $i++) {
	// check if $i is valid multiple
	$len = count($allowMultiples);
	for ($j=0; $j<$len; $j++) {
		if ($i % $allowMultiples[$j] == 0) {
			array_push($metCriteria, $i);
			break;
		}
	}
}

// find sum of all numbers which met the criteria
$len = count($metCriteria);
for ($i=0; $i<count($metCriteria); $i++) {
	$sum += $metCriteria[$i];
}

echo $sum;

?>



<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>