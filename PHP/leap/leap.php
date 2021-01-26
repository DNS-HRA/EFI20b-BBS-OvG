Given a year, report if it is a leap year.

The tricky thing here is that a leap year in the Gregorian calendar occurs:

on every year that is evenly divisible by 4
  except every year that is evenly divisible by 100
    unless the year is also evenly divisible by 400
For example, 1997 is not a leap year, but 1996 is. 1900 is not a leap year, but 2000 is.

If your language provides a method in the standard library that does this look-up, pretend it doesn't exist and implement it yourself.

Notes
Though our exercise adopts some very simple rules, there is more to learn!

For a delightful, four minute explanation of the whole leap year phenomenon, go watch this youtube video.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar leap/leap_test.php
Source
JavaRanch Cattle Drive, exercise 3 http://www.javaranch.com/leap.jsp    

    
<?php
    
function isLeap($leap)
{
  if ($leap % 4 !== 0)
  {
    return false;
  }
  if ($leap % 4 == 0 AND $leap % 100 !== 0)
  { 
    return true;
  }
  
  if ($leap % 100 == 0 AND $leap % 400 !== 0)
  {
    return false;
  }
  if ($leap % 400 == 0)
  {
    return true;
  } 

  return $leap; 
}