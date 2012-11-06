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