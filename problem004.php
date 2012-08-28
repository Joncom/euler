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
/ Problem 4 (http://projecteuler.net/problem=4)
/
/ "A palindromic number reads the same both
/ ways. The largest palindrome made from the
/ product of two 2-digit numbers is
/ 9009 = 91 99.
/ 
/ Find the largest palindrome made from the
/ product of two 3-digit numbers."
/
/ Solution: 906609
/
**************************/

set_time_limit(300);

function isPalendrome($n) {
	$n = strval($n);
	$len = strlen($n);
	$reverseN = "";
	for ($i=$len-1; $i>=0; $i--) {
		$reverseN = $reverseN . "" . substr($n, $i, 1);
	}
	if ($n == $reverseN) return true;
	else return false;
}

$x = 0;
$y = 0;
$product = 0;
for ($i=100; $i<=999; $i++) {
	for ($j=100; $j<=999; $j++) {
		if(isPalendrome($i*$j)) {
			if ($i * $j > $product) {
				$product = $i * $j;
				$x = $i;
				$y = $j;
				echo "Found larger palendrome: $i * $j = " . $i*$j . "<br>";
			}
		}
	}
}

?>


<?php 
$End = getTime(); 
echo "Time taken = ".number_format(($End - $Start),2)." secs"; 
?>