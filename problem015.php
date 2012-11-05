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
/ Starting in the top left corner of a 2x2 grid,
/ there are 6 routes (without backtracking) to
/ the bottom right corner.
/
/ How many routes are there through a 20x20 grid?
/
/ Solution: ?
/ Running-time: ?
/
**************************/

set_time_limit(300);

function countRoutes( $grid_width, $grid_height, $x = 0, $y = 0 ) {

    // Reached the end?
    if( $x == $grid_width && $y == $grid_height ) {

        return 1;

    }

    $local_count = 0;

    // Try Right.
    if( $x < $grid_width ) {

        $local_count += countRoutes( $grid_width, $grid_height, $x + 1, $y );

    }

    // Try Down.
    if( $y < $grid_height ) {

        $local_count += countRoutes( $grid_width, $grid_height, $x, $y + 1 );

    }

    return $local_count;

}

$grid_width = 4;
$grid_height = 5;

// Possible route count?
$answer = countRoutes( $grid_width, $grid_height );

echo $answer . " routes.";


?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>