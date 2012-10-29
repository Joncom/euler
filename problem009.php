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
/ A Pythagorean triplet is a set of three natural
/ numbers, a < b < c, for which,
/
/ a^2 + b^2 = c^2
/ For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
/
/ There exists exactly one Pythagorean triplet for
/ which a + b + c = 1000.
/
/ Find the product abc.
/
/ Solution: ?
/ Running-time: ?
/
**************************/

set_time_limit(30);

// Do work here.


?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>