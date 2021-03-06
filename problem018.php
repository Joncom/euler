<?php
/*

NOTE: Problem 67 is very similar but not susceptible to
brute force (which I used here). Check there for a more
elegant solution.

*/
?>

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
/  By starting at the top of the triangle below and moving to adjacent numbers on the row below, the maximum total from top to bottom is 23.
/
/    3
/   7 4
/  2 4 6
/ 8 5 9 3
/
/ That is, 3 + 7 + 4 + 9 = 23.
/
/ Find the maximum total from top to bottom of the triangle below:
/
/                   75
/                 95 64
/                17 47 82
/              18 35 87 10
/             20 04 82 47 65
/            19 01 23 75 03 34
/          88 02 77 73 07 63 67
/         99 65 04 28 06 16 70 92
/        41 41 26 56 83 40 80 70 33
/       41 48 72 33 47 32 37 16 94 29
/      53 71 44 65 25 43 91 52 97 51 14
/     70 11 33 28 77 73 17 78 39 68 17 57
/    91 71 52 38 17 14 91 43 58 50 27 29 48
/   63 66 04 68 89 53 67 30 73 16 69 87 40 31
/ 04 62 98 27 23 09 70 98 73 93 38 53 60 04 23
/
/ Solution: 1074
/ Running-time: 0.13 secs
/
/
**************************/

set_time_limit( 30 );

echo "<pre>";

$triangle = "75
95 64
17 47 82
18 35 87 10
20 04 82 47 65
19 01 23 75 03 34
88 02 77 73 07 63 67
99 65 04 28 06 16 70 92
41 41 26 56 83 40 80 70 33
41 48 72 33 47 32 37 16 94 29
53 71 44 65 25 43 91 52 97 51 14
70 11 33 28 77 73 17 78 39 68 17 57
91 71 52 38 17 14 91 43 58 50 27 29 48
63 66 04 68 89 53 67 30 73 16 69 87 40 31
04 62 98 27 23 09 70 98 73 93 38 53 60 04 23";

// Break up triangle into rows.
$triangle = explode( "\n", $triangle );

// Break up each row into individual numbers.
for( $i = 0; $i < count( $triangle ); $i++ ) {

	$triangle[ $i ] = explode( " ", $triangle[ $i ] );

}

function highestSum( $triangle, $row = 0, $column = 0, $sum = 0 ) {

	if( $row == count( $triangle ) ) return $sum;

	$sum += $triangle[ $row ][ $column ];

	$left = highestSum( $triangle, $row + 1, $column, $sum );

	$right = highestSum( $triangle, $row + 1, $column + 1, $sum );

	return ( $left > $right ? $left : $right );

}

echo "Answer: " . highestSum( $triangle );

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>