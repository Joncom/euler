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
/ A permutation is an ordered arrangement of objects.
/ For example, 3124 is one possible permutation of
/ the digits 1, 2, 3 and 4. If all of the permutations
/ are listed numerically or alphabetically, we call it
/ lexicographic order. The lexicographic permutations
/ of 0, 1 and 2 are:
/
/ 012   021   102   120   201   210
/
/ What is the millionth lexicographic permutation of
/ the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
/
/ Solution: ?
/ Running-time: ?
/
/
**************************/

set_time_limit( 60 * 60 * 3 );
ini_set('memory_limit','1324M');

$permutations = array();

// The 1,000,000th term.
$index = 1000000 - 1;

echo "<pre>";

// function to generate and print all N! permutations of $str. (N = strlen($str)).
function permute($str,$i,$n) {

   global $permutations;

   if ($i == $n) {

   		//print "$str\n";

   		array_push( $permutations, $str );

   } else {

        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($str, $i+1, $n);
          swap($str,$i,$j); // backtrack.
       }
   }
}

// function to swap the char at pos $i and $j of $str.
function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}

$str = "0123456789";
permute($str,0,strlen($str)); // call the function.

sort($permutations);

echo "Answer: " . $permutations[ $index ];

echo "</pre>";

?>






<?php
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>