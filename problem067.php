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
/  By starting at the top of the triangle below and moving to
/ adjacent numbers on the row below, the maximum total from
/ top to bottom is 23.
/
/    3
/   7 4
/  2 4 6
/ 8 5 9 3
/
/ That is, 3 + 7 + 4 + 9 = 23.
/
/ Find the maximum total from top to bottom in triangle.txt,
/ a file containing a triangle with one-hundred rows.
/
/ Solution: 7273
/ Running-time: 0.01 secs
/
/
**************************/

set_time_limit( 30 );

echo "<pre>";

// Get triangle as a string from file.
$triangle = trim( file_get_contents( 'problem067_triangle.txt' ) );

// Break up triangle into rows.
$triangle = explode( "\n", $triangle );

// Break up each row into individual numbers.
for( $i = 0; $i < count( $triangle ); $i++ ) {

	$triangle[ $i ] = explode( " ", $triangle[ $i ] );

}

// From bottom up, starting at the second last row.
for( $row = count( $triangle ) - 2; $row >= 0; $row-- ) {

	for( $column = 0; $column < count( $triangle[ $row ] ); $column++ ) {

		$largest_adjacent_child = max(

			$triangle[ $row + 1 ][ $column ],

			$triangle[ $row + 1 ][ $column + 1 ]

		);

		$triangle[ $row ][ $column ] += $largest_adjacent_child;

	}

}

echo "Answer: " . $triangle[0][0];

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>