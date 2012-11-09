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
/ 145 is a curious number, as
/ 1! + 4! + 5! = 1 + 24 + 120 = 145.
/
/ Find the sum of all numbers which are equal
/ to the sum of the factorial of their digits.
/
/ Note: as 1! = 1 and 2! = 2 are not sums
/ they are not included.
/
/ Solution: 40730
/ Running-time: 15.89 secs
/
**************************/

set_time_limit( 60 );

//ini_set('memory_limit','1324M');

$factorials = array(

	'0' => '1',

	'1' => '1',

	'2' => '2',

	'3' => '6',

	'4' => '24',

	'5' => '120',

	'6' => '720',

	'7' => '5040',

	'8' => '40320',

	'9' => '362880'

);

echo "<pre>";

$total_sum = 0;

// Start at 10 since 1!=1, 2!=2,
// and any lone factorial is not a sum.
for( $i = 10; $i < 1000000; $i++ ) {

	$string = strval( $i );

	$length = strlen( $string );

	$sum = 0;

	for( $index = 0; $index < $length; $index++ ) {

		$sum = bcadd( $sum, $factorials[ $string[ $index ] ] );

	}

	if( $sum == $i ) {

		echo "$string ... ";

		for( $index = 0; $index < $length; $index++ ) {

			echo "$index!"
			   . ( $index != $length - 1 ? ' + ' : ' ' );

		}

		echo "= $sum "
		   . "<b><-- FOUND MATCH!</b>"
		   . "\n";

		$total_sum = bcadd( $total_sum, $sum );

	}

}

echo "Answer: $total_sum";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>