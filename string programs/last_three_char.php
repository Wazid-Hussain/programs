<?php

	/*============================================================
	Print Only the Only the Last Three Characters from an E-Mail
	=============================================================*/


	echo "<b><u>Q : Code to Print Only the Last Three Characters from an E-Mail ?</b></u> <br>";

	echo "<hr>";
	#given Email is
	$url = 'test@test.com';

	echo "The URL Is : $url <br>";


	echo "<hr>";


	#temp variable is to hold the temporary last Three char of given mail
	$temp = '';

	#last variable is to hold the final output
	$last = '';

	# $a variable is to define the $last index positions
	$a = 0;


	#This loop is for extracting the last three char from the given email

	for ($j=strlen($url)-1; $j > strlen($url)-4 ; $j--) { 
	
		$temp[$a] = $url[$j];

		$a++;

	}


	# This loop is for ordring the last block name in Left To Right way
	for ($k=strlen($temp)-1; $k >=0 ; $k--) { 

		$last[$a] = $temp[$k];

		$a++;

	}
	echo "$last";

?>