<?php

	/*============================================================
	Print Only the first FIve words of the string
	=============================================================*/


	echo "<b><u>Q : Code to Print First Five words of the string ?</b></u> <br>";

	echo "<hr>";


	# $string is the Given string
	$string = 'The quick brown fox jumps over the lazy dog';

	echo "The Given String is : $string <br>";


	echo "<hr>";


	#temp variable is to hold the First Five Words Of String
	$temp = '';

	$a = 0;

	# $c is to count the First Five Words
	$c = 0;

	#This loop is for extracting the first Five words from string and storing into $temp variable
	for ($j=0; $j < strlen($string)-1 ; $j++) { 
	

		if ($string[$j] == chr(32)) {
			
			$c += 1;
			if ($c == 5) {
				
				break;
			}
		}

		$temp[$a] = $string[$j];

		$a++;

	}


	echo "The first Five words of the string is : $temp";


?>