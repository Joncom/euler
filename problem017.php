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
/ If the numbers 1 to 5 are written out in words:
/ one, two, three, four, five, then there are
/ 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
/
/ If all the numbers from 1 to 1000 (one thousand)
/ inclusive were written out in words, how many
/ letters would be used?

/ NOTE: Do not count spaces or hyphens. For example,
/ 342 (three hundred and forty-two) contains 23
/ letters and 115 (one hundred and fifteen) contains
/ 20 letters. The use of "and" when writing out
/ numbers is in compliance with British usage.
/
/ Solution:
/ Running-time:
/
/
**************************/

set_time_limit( 30 );

// Used to convert numbers to words.
require_once( 'problem017_cnumlib.php' );

echo "<pre>";

$all_numbers = '';

for( $number = 1; $number <= 1000; $number++ ) {

	$all_numbers .= convertNumber( $number );

}

// Strip spaces.
$all_numbers = preg_replace("/\s/", '', $all_numbers);

// Strip dashes.
$all_numbers = preg_replace("/-/", '', $all_numbers);

echo "Answer: " . strlen( $all_numbers );

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>