<?php

	/*============================================================
	Print Only the first word of the string
	=============================================================*/


	echo "<b><u>Q : Code to Print First word of the string ?</b></u> <br>";

	echo "<hr>";


	#given E-Mail is
	$string = 'Strings are crazy';

	echo "The Given String is : $string <br>";


	echo "<hr>";


	#temp variable is to hold the temporary last block of email
	$temp = '';

	$a = 0;


	#This loop is for extracting the first word from string and storing into $temp variable
	for ($j=0; $j < strlen($string)-1 ; $j++) { 
	

		if ($string[$j] == chr(32)) {
		
			break;
		}

		$temp[$a] = $string[$j];

		$a++;

	}


	echo "The first word of the string is : $temp";


?>