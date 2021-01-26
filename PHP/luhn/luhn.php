<?php

/*
Given a number determine whether or not it is valid per the Luhn formula.

The Luhn algorithm is a simple checksum formula used to validate a variety of identification numbers, such as credit card numbers and Canadian Social Insurance Numbers.

The task is to check if a given string is valid.

Validating a Number
Strings of length 1 or less are not valid. Spaces are allowed in the input, but they should be stripped before checking. All other non-digit characters are disallowed.

Example 1: valid credit card number
4539 1488 0343 6467
The first step of the Luhn algorithm is to double every second digit, starting from the right. We will be doubling

4_3_ 1_8_ 0_4_ 6_6_
If doubling the number results in a number greater than 9 then subtract 9 from the product. The results of our doubling:

8569 2478 0383 3437
Then sum all of the digits:

8+5+6+9+2+4+7+8+0+3+8+3+3+4+3+7 = 80
If the sum is evenly divisible by 10, then the number is valid. This number is valid!

Example 2: invalid credit card number
8273 1232 7352 0569
Double the second digits, starting from the right

7253 2262 5312 0539
Sum the digits

7+2+5+3+2+2+6+2+5+3+1+2+0+5+3+9 = 57
57 is not evenly divisible by 10, so this number is not valid.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar luhn/luhn_test.php
Source
The Luhn Algorithm on Wikipedia http://en.wikipedia.org/wiki/Luhn_algorithm
*/



function isValid($digits)
{ 
  
  $onlynumbers = "";
  
   $digits = str_replace(" ","",$digits);

  // Buchstaben entfernen
   $length = strlen($digits);
  //var_dump ($digits);
  for ($i = 0; $i < $length; $i++)
  {
    $garbage = $digits[$i];
    if (is_numeric($garbage)){
      $onlynumbers = $onlynumbers.$garbage;
    }
    else return false;
  }
  /*
  $sum = 0;
  for ($i = 0; $i < $length; $i++){
  $sum + $digits[$i];
  }
  if ($sum == 0){
  return true;
  }  $length = strlen($digits);
  */
  
  //$onlynumbers = str_replace(""," ",$onlynumbers);
  
  // leere Ketten abfangen
  $length = strlen($onlynumbers);
  if ($length <= 1) {
    return false;
  }
  //Prüfsumme
  $sum = 0;
  for ($i = 0; $i < $length; $i++)
  {
    $digit = $onlynumbers[$length - $i -1];
    if ($i % 2 == 1)
    {
      $digit = (int)$digit * 2;
      if ($digit > 9)
      {
        $digit-=9;
      }
    }
    $sum = $sum + (int)$digit;
  }
  return ($sum % 10 == 0);
}