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
/ Problem 20 (http://projecteuler.net/problem=20)
/
/ "n! means n  (n  1)  ...  3  2  1
/
/ For example, 10! = 10  9  ...  3  2  1 = 3628800,
/ and the sum of the digits in the number 10! is
/ 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
/
/ Find the sum of the digits in the number 100!"
/
/ Solution: 648
/
**************************/

// Returns string representing factorial $n.
// Argument $n is a string.
function factorial($n) {
	if(intval($n)==0) return "1"; // special case
	if(intval($n)<0) return "0"; // positive ints only
	$product = "1";
	for ($i=1; $i<=$n; $i++) {
		$product = bcmul($product, strval($i));
	}
	return $product;
}

// Returns string representing sum of digits.
// Argument $n is a string.
function sumOfDigits($n) {
	$len = strlen($n);
	$sum = 0;
	for ($i=0; $i<$len; $i++) {
		$sum += intval(substr($n, $i, 1));
	}
	return $sum;
}

$n = "100"; //string used to allow arbitrarily long integers
$factorial = factorial($n);
$sumOfDigits = sumOfDigits($factorial);

echo "factorial($n) = " . $factorial;
echo "<br>";
echo "<b>sumOfDigits = " . $sumOfDigits . "</b>";
echo "<br>";

?>


<?php 
$End = getTime(); 
echo "Time taken = ".number_format(($End - $Start),2)." secs"; 
?>