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
/ Solution: 31875000
/ Running-time: 0.01 secs
/
**************************/

$target = 1000;

set_time_limit( 60 * 60 * 8 ); // 8 hrs.

function getABC( $m, $n, $k = 1 ) {

    $result = array();

    $result['a'] = $k * ( pow( $m, 2 ) - pow( $n, 2 ) );

    $result['b'] = $k * ( 2 * $m * $n );

    $result['c'] = $k * ( pow( $m, 2 ) + pow( $n, 2 ) );

    return $result;

}

// Do work here.

for( $k = 1; $k < 1000; $k++ ) {

    for( $m = 1; $m < 1000; $m++ ) {

        // m must be greater than n.
        for( $n = 1; ( $n < 1000 && $n < $m ); $n++ ) {

            $triple = getABC( $m, $n, $k );

            $sum = ( $triple['a'] + $triple['b'] + $triple['c'] );

            if( $sum == 1000 ) {

                $message = "a=" . $triple['a'] . ", "
                         . "b=" . $triple['b'] . ", "
                         . "c=" . $triple['c'] . ", "
                         . "abc=" . ( $triple['a'] * $triple['b'] * $triple['c'] )
                         . "<br />"
                         . "Found target product.";

                break 3;

            }
        }
    }
}

echo ( !isset( $message ) ? "Exhausted all values." : $message );

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>