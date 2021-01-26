
 You must add a gigasecond to the informed date.

A gigasecond is 10^9 (1,000,000,000) seconds.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar gigasecond/gigasecond_test.php
Source
Chapter 9 in Chris Pine's online Learn to Program tutorial. http://pine.fm/LearnToProgram/?Chapter=09   

    
<?php
    
function from ($date) {

	$date = $date->add(new DateInterval('PT1000000000S'));
	return $date;
}	

?>