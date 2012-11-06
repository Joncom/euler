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
/ A permutation is an ordered arrangement of objects.
/ For example, 3124 is one possible permutation of
/ the digits 1, 2, 3 and 4. If all of the permutations
/ are listed numerically or alphabetically, we call it
/ lexicographic order. The lexicographic permutations
/ of 0, 1 and 2 are:
/
/ 012   021   102   120   201   210
/
/ What is the millionth lexicographic permutation of
/ the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 60 * 60 * 3 );
ini_set('memory_limit','1324M');

$permutations = array();

// The 1,000,000th term.
$index = 1000000 - 1;

echo "<pre>";

function lexicographicPermute( $string ) {

	$length = strlen( $string );

	// 1.
	// Find the largest index k such that a[k] < a[k + 1].
	// If no such index exists, the permutation is the last permutation.
	for( $i = 0; $i < $length - 1; $i++ ) {

		if( $string[ $i ] < $string[ $i + 1 ] ) $k = $i;

	}

	if( isset( $k ) ) die("Last permutation.");

	// 2.
	// Find the largest index l such that a[k] < a[l].
	// Since k + 1 is such an index, l is well defined and satisfies k < l.
	for( $i = $k + 1; $i < $length; $i++ ) {

		if( $string[ $k ] < $string[ $i ] ) $l = $i;

	}

	if( isset( $l ) ) die("Should never happen.");

	// 3.
	// Swap a[k] with a[l].
	$temp = $string[ $k ];
	$string[ $l ] = $string[ $k ];
	$string[ $k ] = $temp;

	// 4.
	// Reverse the sequence from a[k + 1] up to and including the final element a[n].

	// Part to be replaced.
	$needle = substr( $string, $k + 1 );

	$new_sequence = strrev( $needle );

	$new_string = str_replace( $needle, $new_sequence, $string );

	// Permutation done.

	return $new_string;

}

$str = "0123456789";

echo lexicographicPermute($str);

//echo "Answer: ";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>