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
/ A Pythagorean triplet is a set of three natural
/ numbers, a < b < c, for which,
/
/ a^2 + b^2 = c^2
/ For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
/
/ There exists exactly one Pythagorean triplet for
/ which a + b + c = 1000.
/
/ Find the product abc.
/
/ Solution: ?
/ Running-time: ?
/
**************************/

set_time_limit(30);

function getABC( $m, $n, $k = 1 ) {

    $result = array();

    $result['a'] = $k * ( pow( $m, 2 ) - pow( $n, 2 ) );

    $result['b'] = $k * ( 2 * $m * $n );

    $result['c'] = $k * ( pow( $m, 2 ) + pow( $n, 2 ) );

    return $result;

}

// Do work here.
//getABC(4,3);

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>