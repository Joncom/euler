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
/
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 30 );

function sumProperDivisors( $number ) {

    // Get the proper divisors.

        $factors = array();

        $max = floor( sqrt( $number ) );

        for( $factor = 1; $factor <= $max; $factor++ ) {

            if( $number % $factor == 0 ) {

                array_push( $factors, $factor );

                // Don't add the square root twice.
                if( $factor != $number / $factor ) {

                    // A proper factor must be less than the number.
                    if( $factor != 1 ) {

                        array_push( $factors, $number / $factor );

                    }

                }

            }

        }

        return array_sum( $factors );

}

echo "<pre>";

$sum = 0;

// Numbers which have been taken into account already.
$skip = array();

for( $i = 0; $i < 10000; $i++ ) {

    if( isset( $skip[ $i ] ) ) continue;

    // A potential pair amicable number.
    $pair = sumProperDivisors( $i );

    $pair_pair = sumProperDivisors( $pair );

    $amicable = ( $i == $pair_pair );

    echo ( $amicable ? "<b>" : "" )
       . "d($i) = $pair, and d($pair) = $pair_pair."
       . ( $amicable ? "</b>" : "" )
       . "<br>";

    if( $amicable ) {

        $sum += ( $i + $pair );

        // Don't count these numbers again.
        $skip[ $i ] = $skip[ $pair ] = true;

    }

}

echo "Answer: $sum";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>