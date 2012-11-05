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

function countRoutes( $x, $y, $grid_width, $grid_height ) {

    // Reached the end?
    if( $x == $grid_width && $y == $grid_height ) {

        return 1;

    }

    $local_count = 0;

    // Try Right.
    if( $x < $grid_width ) {

        $local_count += countRoutes( $x + 1, $y, $grid_width, $grid_height );

    }

    // Try Down.
    if( $y < $grid_height ) {

        $local_count += countRoutes( $x, $y + 1, $grid_width, $grid_height );

    }

    return $local_count;

}

$grid_width = 20;
$grid_height = 20;

// Possible route count?
$answer = countRoutes( 0, 0, $grid_width, $grid_height );

echo $answer . " routes.";


?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>