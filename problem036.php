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
/ The decimal number, 585 = 1001001001 base 2 (binary), is
/ palindromic in both bases.
/
/ Find the sum of all numbers, less than one million,
/ which are palindromic in base 10 and base 2.
/
/ (Please note that the palindromic number, in either
/ base, may not include leading zeros.)
/
/ Solution: 34967th
/ Running-time: ~2 seconds
/
**************************/

set_time_limit(30);

function isPalendrome($n) {

    $n = strval($n);

    $len = strlen($n);

    for( $i = 0; $i <= $len / 2; $i++ ) {

        if( $n[ $i ] != $n[ $len - $i - 1 ] ) return false;

    }

    return true;

}

function decimalToBinary($n) {

    if( $n < 1 ) return;

    else return decimalToBinary( $n / 2 ) . ( $n % 2 );

}

$upper_limit = 1000000;

$sum = 0;

for( $i = 1; $i < $upper_limit; $i++ ) {

    // Only bother with odd numbers because, in base 2, an
    // even number always starts with 1 and ends in 0.
    if( $i % 2 === 0 ) continue;

    if( isPalendrome( $i ) ) {

        $base2 = decimalToBinary( $i );

        if( isPalendrome( $base2 ) ) {

            echo "$i is a palendrome in base 10 and in base 2 ( $base2 ). <br />";

            $sum += $i;

        }

    }

}

echo "The sum of all numbers, less than $upper_limit, "
   . "which are palindromic in base 10 and base 2 is $sum.";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>