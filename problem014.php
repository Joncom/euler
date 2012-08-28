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
/ Problem 14 (http://projecteuler.net/problem=14)
/
/ "The following iterative sequence is defined for
/ the set of positive integers:
/ 
/ n  n/2 (n is even)
/ n  3n + 1 (n is odd)
/
/ Using the rule above and starting with 13, we
/ generate the following sequence:
/
/ 13  40  20  10  5  16  8  4  2  1
/ It can be seen that this sequence (starting at
/ 13 and finishing at 1) contains 10 terms.
/ Although it has not been proved yet (Collatz
/ Problem), it is thought that all starting
/ numbers finish at 1.
/
/ Which starting number, under one million,
/ produces the longest chain?
/ 
/ NOTE: Once the chain starts the terms are
/ allowed to go above one million."
/
/ Solution: 837799 (took 519.40s to execute)
/
**************************/

set_time_limit(900);

function sequence($n)
// returns array of sequence chain
{
	$chain = array(0=>$n);
	while($n!=1)
	{
		if($n%2==0) $n/=2;
		else $n = 3*$n+1;
		array_push($chain, $n);
	}
	return $chain;
}

$biggestN = 0;
$biggestChain = 0;

// check numbers under 1,000,000 for
// longest chain
for($i=2; $i<1000000; $i++)
{
	$currLen = count(sequence($i));
	if($currLen>$biggestChain)
	{
		echo "Old chain: $biggestChain (start number: $biggestN). ";
		
		$biggestChain = $currLen;
		$biggestN = $i;
		echo "New chain: $biggestChain (start number: $biggestN). <br>";
	}
}

?>


<?php 
$End = getTime(); 
echo "Time taken = ".number_format(($End - $Start),2)." secs"; 
?>