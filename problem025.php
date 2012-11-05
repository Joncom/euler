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
/ The Fibonacci sequence is defined by the recurrence relation:
/
/ F_n = F_(n-1) + F_(n-2), where F_1 = 1 and F_2 = 1.
/ Hence the first 12 terms will be:
/
/ F_1 = 1
/ F_2 = 1
/ F_3 = 2
/ F_4 = 3
/ F_5 = 5
/ F_6 = 8
/ F_7 = 13
/ F_8 = 21
/ F_9 = 34
/ F_10 = 55
/ F_11 = 89
/ F_12 = 144
/ The 12th term, F_12, is the first term to contain three digits.
/
/ What is the first term in the Fibonacci sequence to contain 1000 digits?
/
/ Solution:
/ Running-time:
/
/
**************************/

set_time_limit( 30 );

$digit_goal = 1000;

// We are actually starting on the fourth term since we are
// saying 1 and 2 were the last two numbers.
$count = 4;

echo "<pre>";

$last_two_numbers = array( 1, 2 );

while(true) {

	$next_term = bcadd( $last_two_numbers[0], $last_two_numbers[1] );

	echo "$count: Last two numbers were "  . $last_two_numbers[0]
	   . ", and " . $last_two_numbers[1]
	   . " which makes " . $next_term
	   . "<br><br>";

	if( strlen( $next_term ) >= $digit_goal ) break;

	$last_two_numbers[0] = $last_two_numbers[1];

	$last_two_numbers[1] = $next_term;

	$count++;

}

echo "Term $count is the first to contain $digit_goal digits.";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>