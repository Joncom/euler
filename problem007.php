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
/ Problem 7 (http://projecteuler.net/problem=7)
/
/ "By listing the first six prime numbers: 2, 3,
/ 5, 7, 11, and 13, we can see that the 6th
/ prime is 13.
/
/ What is the 10 001st prime number?"
/
/ Solution: 104743 (took 34 seconds to find)
/
**************************/

set_time_limit(300);

function nthPrime($n) {
	$primes = array();
	//$foundNthPrime = false;
	
	echo "Searching for the $n prime.<br>";
	
	for($i=2; ; $i++)
	{
		$numPrimesFound = count($primes);
		
		
		// check if finished
			
			if($numPrimesFound==$n) {
				echo "The $n prime is " . $primes[$numPrimesFound-1] . ".";
				return;
			}
		
		// add primes to $primes array
			if($i==2)
			{
				array_push($primes, $i);
				echo ($numPrimesFound+1) ."  prime is " . $i ."<br>";
			}
			else
			{
				$isPrime = true;
				for($j=0; $j<$numPrimesFound; $j++)
				{
					// proves that $i is not a prime
					if($i%$primes[$j]==0) {
						$isPrime = false;
						break;
					}
					
				}
				if($isPrime)
				{
					array_push($primes, $i);
					echo ($numPrimesFound+1) ."  prime is " . $i ."<br>";
				}
				$i++;
			}	
	}
}

nthPrime(10001);


?>


<?php 
$End = getTime(); 
echo "Time taken = ".number_format(($End - $Start),2)." secs"; 
?>