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
/ Let d(n) be defined as the sum of proper divisors of
/ n (numbers less than n which divide evenly into n).
/ If d(a) = b and d(b) = a, where a != b, then a and b
/ are an amicable pair and each of a and b are called
/ amicable numbers.
/
/ For example, the proper divisors of 220 are 1, 2, 4,
/ 5, 10, 11, 20, 22, 44, 55 and 110; therefore
/ d(220) = 284. The proper divisors of 284 are 1, 2, 4,
/ 71 and 142; so d(284) = 220.
/
/ Evaluate the sum of all the amicable numbers under 10000.
/
/ Solution: 31626
/ Running-time: 0.52 secs
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

    $amicable = ( $i == $pair_pair && $i != $pair );

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