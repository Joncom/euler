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
/
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 30 );

echo "<pre>";

echo "Answer: ";

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>