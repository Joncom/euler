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
/ Problem 10 (http://projecteuler.net/problem=10)
/
/ "The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
/ 
/ Find the sum of all the primes below two million."
/
/ Solution: 142913828922 (took 37,600.84 sec)
/
**************************/

set_time_limit(1800*2*11); // 11 hrs

function sumOfPrimesBelowN($n) {
	$primes = array();
	
	echo "Searching for primes under $n <br>";
	
	$sum = 0;
	
	for($i=2; $i<$n; $i++)
	{
		// add primes to $primes array
		if($i==2)
		{
			array_push($primes, $i);
			echo "Prime found: " . $i ."<br>";
			$sum += 2;
		}
		else
		{
			$isPrime = true; // assume until proven false
			for($j=0; $j<count($primes); $j++)
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
				echo "Prime found: " . $i ."<br>";
				$sum += $i;
			}
			$i++;
		}
	}
	
	echo "Sum of all afformentioned primes: $sum <br>";
	
	
}

sumOfPrimesBelowN(2000000);


?>


<?php 
$End = getTime(); 
echo "Time taken = ".number_format(($End - $Start),2)." secs"; 
?>