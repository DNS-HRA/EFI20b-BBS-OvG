Calculate the Hamming difference between two DNA strands.

A mutation is simply a mistake that occurs during the creation or copying of a nucleic acid, in particular DNA. Because nucleic acids are vital to cellular functions, mutations tend to cause a ripple effect throughout the cell. Although mutations are technically mistakes, a very rare mutation may equip the cell with a beneficial attribute. In fact, the macro effects of evolution are attributable by the accumulated result of beneficial microscopic mutations over many generations.

The simplest and most common type of nucleic acid mutation is a point mutation, which replaces one base with another at a single nucleotide.

By counting the number of differences between two homologous DNA strands taken from different genomes with a common ancestor, we get a measure of the minimum number of point mutations that could have occurred on the evolutionary path between the two strands.

This is called the 'Hamming distance'.

It is found by comparing two DNA strands and counting how many of the nucleotides are different from their equivalent in the other string.

GAGCCTACTAACGGGAT
CATCGTAATGACGGCCT
^ ^ ^  ^ ^    ^^
The Hamming distance between these two DNA strands is 7.

Implementation notes
The Hamming distance is only defined for sequences of equal length. This means that based on the definition, each language could deal with getting sequences of equal length differently.

Restrictions
Don't solve this with the gmp_hamdist function! Solve this one yourself using other basic tools instead.

Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:

 % ./phpunit.phar hamming/hamming_test.php
Source
The Calculating Point Mutations problem at Rosalind http://rosalind.info/problems/hamm/


<?php
    
function distance(string $strandA, string $strandB) : int
{

  
  $counter=0;
  for ($i=0 ; ($i <strlen($strandA)) AND ($i <strlen($strandB)); $i++){
  if ($strandA[$i]!=$strandB[$i]){
  //$strandA[$i].$strandB[$i]." $i\n"; 
  $counter++;
  }
  }
  return $counter;
  
  
  
  
}