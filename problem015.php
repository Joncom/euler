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
/ How many routes are there through a 2020 grid?
/
/ Solution: ?
/ Running-time: ?
/
**************************/

set_time_limit(30);


?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>