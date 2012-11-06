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
/ You are given the following information, but you may prefer
/ to do some research for yourself.
/
/ 1 Jan 1900 was a Monday.
/
/ Thirty days has September,
/ April, June and November.
/
/ All the rest have thirty-one,
/ Saving February alone,
/ Which has twenty-eight, rain or shine.
/ And on leap years, twenty-nine.
/
/ A leap year occurs on any year evenly divisible by 4,
/ but not on a century unless it is divisible by 400.
/ How many Sundays fell on the first of the month during
/ the twentieth century (1 Jan 1901 to 31 Dec 2000)?
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 30 );

echo "<pre>";

$sunday_count = 0;

for( $year = 1901; $year <= 2000; $year++ ) {

    for( $month = 1; $month <= 12; $month++ ) {

        $date = $month . "/01/" . $year;

        $time = strtotime( $date );

        $is_sunday = ( date( 'l', $time ) == "Sunday" );

        echo "$date "
           . ( $is_sunday ? 'was a Sunday. ' : '' )
           . "<br>";

        if( $is_sunday ) $sunday_count++;

    }

}

echo "Answer: $sunday_count";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>