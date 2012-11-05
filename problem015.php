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
/ Solution: 137846528820
/ Running-time: 0.03 secs
/
**************************/

set_time_limit(30);

/*
 * Computes the factoral (x!).
 * @author Thomas Oldbury.
 * @license Public domain.
 */
function bcfact($fact, $scale = 100)
{
    if($fact == 1) return 1;
    return bcmul($fact, bcfact(bcsub($fact, '1'), $scale), $scale);
}

$grid_width = 20;
$grid_height = 20;

$answer = bcfact( $grid_width + $grid_height ) / ( bcfact( $grid_width ) * bcfact( $grid_height ) );

echo $answer . ' routes.';

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>