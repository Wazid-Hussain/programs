<?php

	/*============================================================
	Print Only the domain name of email leading after @ sign
	=============================================================*/


	echo "<b><u>Q : Code to Print Only the Domain name i.e after the '@' Symbol ?</b></u> <br>";

	echo "<hr>";


	#given E-Mail is
	$email = 'test@domain.com';

	echo "The E-Mail Is : $email <br>";


	echo "<hr>";


	#temp variable is to hold the temporary last block of email
	$temp = '';

	#last variable is to hold the final output
	$last = '';

	# $a variable is to define the $last index positions
	$a = 0;


	#This loop is for extracting the last block from url leading with a '/' symbol
	for ($j=strlen($email)-1; $j > 0 ; $j--) { 
	

		if ($email[$j] == '@') {
		
			break;
		}

		$temp[$a] = $email[$j];

		$a++;

	}


	# This loop is for ordring the domain name in Left To Right way
	for ($k=strlen($temp)-1; $k >=0 ; $k--) { 

		$last[$a] = $temp[$k];

		$a++;

	}
	echo "$last";


?>