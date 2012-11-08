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
/ Consider all integer combinations of ab for
/ 2 <= a <= 5 and 2 <= b <= 5:
/
/ 2^2=4, 2^3=8, 2^4=16, 2^5=32
/ 3^2=9, 3^3=27, 3^4=81, 3^5=243
/ 4^2=16, 4^3=64, 4^4=256, 4^5=1024
/ 5^2=25, 5^3=125, 5^4=625, 5^5=3125
/ If they are then placed in numerical order,
/ with any repeats removed, we get the following
/ sequence of 15 distinct terms:
/
/ 4, 8, 9, 16, 25, 27, 32, 64, 81,
/ 125, 243, 256, 625, 1024, 3125
/
/ How many distinct terms are in the sequence
/ generated by ab for
/ 2 <= a <= 100 and 2 <= b <= 100?
/
/ Solution: 9183
/ Running-time: 1.90 secs
/
/
**************************/

set_time_limit( 30 );

$min = 2;

$max = 100;

// Numbers found.
$results = array();

echo "<pre>";

for( $base = $min; $base <= $max; $base++ ) {

	for( $exponent = $min; $exponent <= $max; $exponent++ ) {

		$result = bcpow( $base, $exponent );

		echo "$base^$exponent=$result"
		   . ( $exponent == $max ? "\n" : ", " );

		$results[] = $result;

	}

}


//sort( $results );

$results = array_unique( $results );

//print_r( $unique_results );

$answer = count( $results );

echo "Answer: $answer";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>