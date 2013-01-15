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
/  The prime 41, can be written as the sum of
/  six consecutive primes:
/
/  41 = 2 + 3 + 5 + 7 + 11 + 13
/  This is the longest sum of consecutive primes
/  that adds to a prime below one-hundred.
/
/  The longest sum of consecutive primes below
/  one-thousand that adds to a prime, contains
/  21 terms, and is equal to 953.
/
/  Which prime, below one-million, can be written
/  as the sum of the most consecutive primes?
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 30 );

echo "<pre>";


echo "Answer: ?";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>