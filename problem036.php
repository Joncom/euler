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
/ The decimal number, 585 = 1001001001 to-the 2 (binary), is
/ palindromic in both bases.
/
/ Find the sum of all numbers, less than one million,
/ which are palindromic in base 10 and base 2.
/
/ (Please note that the palindromic number, in either
/ base, may not include leading zeros.)
/
/ Solution: ?
/
**************************/

set_time_limit(300);

function isPalendrome($n) {
    $n = strval($n);
    $len = strlen($n);
    $reverseN = "";
    for ($i=$len-1; $i>=0; $i--) {
        $reverseN = $reverseN . "" . substr($n, $i, 1);
    }
    if ($n == $reverseN) return true;
    else return false;
}

function convertToBase2($n) {

    // Figure out the biggest step that divides out of n.

        $bit_step = 0;

        $running = true;

        while( $running ) {

            if( $n / pow( 2, $bit_step ) > 1 ) {

                // Not the biggest, increase by 1 step.

                $bit_step++;

            } else {

                // This step was too big, backtrack 1 step, and stop.

                $bit_step--;

                $running = false;

            }

        }

    // Build binary number.

        $base2N = "";

        for( $i = $bit_step; $i >= 0; $i-- ) {

            if( $n / pow( 2, $i ) >= 1 ) {

                $n -= pow( 2, $i );

                $base2N .= "1";

            } else {

                $base2N .= "0";

            }

        }

    return $base2N;

}





$upper_limit = 1000;

// Figure stuff out here...
for( $i = 1; $i < $upper_limit; $i++ ) {

    $base2 = convertToBase2( $i );

    if( isPalendrome( $i ) && isPalendrome( $base2 ) ) {

        echo "$i is a palendrome in base 10 and in base 2 ( $base2 ). <br />";

    }

}

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>