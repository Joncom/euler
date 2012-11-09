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

set_time_limit( 30 );

echo "<pre>";

echo "Answer: ";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>