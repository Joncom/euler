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
/ The decimal number, 585 = 10010010012 (binary), is
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

$upper_limit = 1000000;

// Figure stuff out here...
for( $i = 1; $i < $upper_limit; $i++ ) {



}

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>