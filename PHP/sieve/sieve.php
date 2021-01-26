<?php

/*
Use the Sieve of Eratosthenes to find all the primes from 2 up to a given number.

The Sieve of Eratosthenes is a simple, ancient algorithm for finding all prime numbers up to any given limit. It does so by iteratively marking as composite (i.e. not prime) the multiples of each prime, starting with the multiples of 2.

Create your range, starting at two and continuing up to and including the given limit. (i.e. [2, limit])

The algorithm consists of repeating the following over and over:

take the next available unmarked number in your list (it is prime)
mark all the multiples of that number (they are not prime)
Repeat until you have processed each number in your range.

When the algorithm terminates, all the numbers in the list that have not been marked are prime.

The wikipedia article has a useful graphic that explains the algorithm: https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes

Notice that this is a very specific algorithm, and the tests don't check that you've implemented the algorithm, only that you've come up with the correct list of primes.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar sieve/sieve_test.php
Source
Sieve of Eratosthenes at Wikipedia http://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
*/



function sieve($sieve)
{ 

// liste erzeugen
  $a = array();
  for($i=2; $i <= $sieve; $i++)
  {
    $a[$i] = $i; 
  }   


// sieb    
    for($k=2; $k <= $sieve; $k++)
    {
      if($a[$k] !== false)
     
        for($i = 2; $k*$i <= $sieve; $i++)
        { 
          $a[$k*$i] = false;                          
        }
       
    }


// abschreiben
  $b = array();
  for($i=2; $i <= count($a) +1; $i++)
  {    
    if($a[$i] !== false)
    {
      $b[ ] = $i;      
    }   
  }
  
  return $b;
}