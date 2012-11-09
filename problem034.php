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
/ Solution: ?
/ Running-time: ?
/
/
**************************/

/*
 * Computes the factoral (x!).
 * @author Thomas Oldbury.
 * @license Public domain.
 */
function bcfact($fact, $scale = 100)
{
    if($fact == 1) return 1;
    if($fact == 0) return 1;
    return bcmul($fact, bcfact(bcsub($fact, '1'), $scale), $scale);
}

set_time_limit( 30 );

//ini_set('memory_limit','1324M');

echo "<pre>";

$total_sum = 0;

// Start at 10 since 1!=1, 2!=2,
// and any lone factorial is not a sum.
for( $i = 10; $i < 1000000; $i++ ) {

	$string = strval( $i );

	$length = strlen( $string );

	$sum = 0;

	for( $index = 0; $index < $length; $index++ ) {

		$sum = bcadd( $sum, bcfact( $string[ $index ] ) );

	}

	if( $sum == $i ) {

		echo "$string ... ";

		for( $index = 0; $index < $length; $index++ ) {

			echo "$index!"
			   . ( $index != $length - 1 ? ' + ' : ' ' );

		}

		echo "= $sum ";

		echo "<b><-- FOUND MATCH!</b>";

		echo "\n";

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