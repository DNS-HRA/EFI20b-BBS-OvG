Given a DNA strand, return its RNA complement (per RNA transcription).

Both DNA and RNA strands are a sequence of nucleotides.

The four nucleotides found in DNA are adenine (A), cytosine (C), guanine (G) and thymine (T).

The four nucleotides found in RNA are adenine (A), cytosine (C), guanine (G) and uracil (U).

Given a DNA strand, its transcribed RNA strand is formed by replacing each nucleotide with its complement:

G -> C
C -> G
T -> A
A -> U
Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar rna-transcription/rna-transcription_test.php
Source
Rosalind http://rosalind.info/problems/rna

Submitting Incomplete Solutions
It's possible to submit an incomplete solution so you can see how others have completed the exercise.   

    
<?php
    
function toRna ($dnastrang){

	$rnastrang="";
	for ($i=0 ; ($i <strlen($dnastrang)); $i++){
		if ($dnastrang[$i] == "G") {
			$rnastrang=$rnastrang."C";
		}
		if ($dnastrang[$i] == "A"){
			$rnastrang=$rnastrang."U";
		}
		if ($dnastrang[$i] == "C"){
			$rnastrang=$rnastrang."G";
		}
		if ($dnastrang[$i] == "T"){
			$rnastrang=$rnastrang."A";
		}
	}
	return $rnastrang;
}