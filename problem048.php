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
/ The series,
/ 1^1 + 2^2 + 3^3 + ... + 10^10 = 10405071317.
/
/ Find the last ten digits of the series,
/ 1^1 + 2^2 + 3^3 + ... + 1000^1000.
/
/ Solution: 9110846700
/ Running-time: 3.24 secs
/
/
**************************/

set_time_limit( 30 );

$sum = 0;

for( $i = 1; $i <= 1000; $i++ ) {

	$sum = bcadd( $sum, bcpow( $i, $i ) );

}

// Last 10 digits.
$answer = substr( $sum, -10 );

echo "<pre>";

echo "Answer: $answer";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>