Convert a binary number, represented as a string (e.g. '101010'), to its decimal equivalent using first principles.

Implement binary to decimal conversion. Given a binary input string, your program should produce a decimal output. The program should handle invalid inputs.

Note
Implement the conversion yourself. Do not use something else to perform the conversion for you.
About Binary (Base-2)
Decimal is a base-10 system.

A number 23 in base 10 notation can be understood as a linear combination of powers of 10:

The rightmost digit gets multiplied by 10^0 = 1
The next number gets multiplied by 10^1 = 10
...
The nth number gets multiplied by 10^(n-1).
All these values are summed.
So: 23 => 2*10^1 + 3*10^0 => 2*10 + 3*1 = 23 base 10

Binary is similar, but uses powers of 2 rather than powers of 10.

So: 101 => 1*2^2 + 0*2^1 + 1*2^0 => 1*4 + 0*2 + 1*1 => 4 + 1 => 5 base 10.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar binary/binary_test.php
Source
All of Computer Science http://www.wolframalpha.com/input/?i=binary&a=*C.binary-_*MathWorld-



<?php

// Implementation note:
// --------------------
// If the argument to parse_binary isn't a valid binary value the
// function should raise an \InvalidArgumentException
// with a meaningful error message.

    
function parse_binary($binary)
{
  $length = strlen($binary);
  for ($i = 0; $i < $length; $i++)
  {
    
    if ($binary[$i] !== "0" AND $binary[$i] !== "1")
    {
      throw new InvalidArgumentException("Jeht nich");
    
    }
  
  }
  
 return bin2dec_1($binary);
}
 

// Forwards
function bin2dec_1($binary) { 
    $decimal = 0;
    $len = strlen($binary);
    for ($i = 0; $i < $len; $i++){ 
    
        $decimal += $binary[$i] * pow(2, $len - $i - 1);
    }

    return $decimal; 
}

// Backwards
function bin2dec_2($binary) { 
    $decimal = 0;
    $len = strlen($binary);
    for ($i = $len -1; $i >= 0; $i--){
    
        $decimal += $binary[$i] * pow(2, $len - $i - 1);
    }

    return $decimal; 
}

// With strrev()
function bin2dec_3($binary) { 
    $decimal = 0;
    $len = strlen($binary);
    $binary = strrev($binary);
    for ($i = 0; $i < $len; $i++){ 
    
        $decimal += $binary[$i] * pow(2, $i);
    }

    return $decimal; 
}