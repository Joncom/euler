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
/ 2^15 = 32768 and the sum of its
/ digits is 3 + 2 + 7 + 6 + 8 = 26.
/
/ What is the sum of the digits of the number 2^1000?
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 30 );

// Do work here.

echo "<pre>";

// String value of digits for the number 2^1000.
$digits = bcpow( 2, 1000 );

$sum = 0;

for( $i = 0; $i < strlen( $digits ); $i++  ) $sum += $digits[ $i ];

echo "Answer: $sum";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>