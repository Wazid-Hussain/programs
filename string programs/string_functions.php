<?php
	/*=========================================================================
	Program to impliment the various strings funtions Like :

	1) Transform string to uppercase.
	2) Transform string to Lowercase
	3) Make First characcter to Upper Case.
	=========================================================================*/

	echo "<b><u>Q : Code to Impliment Diffrent String Functions ......</b></u> <br>";

	echo "<hr>";
	#given string
	$name = "PHP is Awesome";

	echo "The Given String Is : $name <br>";


	echo "<hr>";


	# $size is to get the length of the string
	$size = strlen($name);

	# $outputlw is to hold the output as all strings in lower case
	$outputlw = '';


	# Loop to convert all upper case char to lower case
	for ($i=0; $i < $size ; $i++) { 
		
		if (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) {

			$outputlw[$i] = chr(ord($name[$i]) + 32);
		}
		elseif (ord($name[$i]) >= 97 && ord($name[$i]) <= 122) {

			$outputlw[$i] = chr(ord($name[$i]));
		}


		
	}
	echo "String In Lower Case = ";
	echo " $outputlw";
 
	echo "<br>";

	# $outputup is to hold the output as all strings in upper case
	$outputup = '';


	# Loop to convert all lower case char to Upper case
	for ($j=0; $j < $size ; $j++) { 
		
		if (ord($name[$j]) >= 65 && ord($name[$j]) <= 90) {

			$outputup[$j] = chr(ord($name[$j]));
		}
		elseif (ord($name[$j]) >= 97 && ord($name[$j]) <= 122) {

			$outputup[$j] = chr(ord($name[$j]) -32);
		}


		
	}

	echo "String In Upper Case = ";
	echo " $outputup";

	echo "<br>";
 

 	# $output is to hold the output as First char of strings in upper case
	$output = '';


	# Loop to convert all upper case char to lower case
	for ($k=0; $k < $size ; $k++) { 
		
		if (ord($name[$k]) >= 65 && ord($name[$k]) <= 90) {

			$output[$k] = chr(ord($name[$k]) + 32);
		}
		elseif (ord($name[$k]) >= 97 && ord($name[$k]) <= 122) {

			$output[$k] = chr(ord($name[$k]));
		}
		
	}


	# This condition used to convert first char to upper case
	if(ord($output) == 32){
		$output[1] = chr(ord($output[1])-32); 
	}
	else{
		$output[0] = chr(ord($output)-32); 
	}

	echo "String As First Char as  Upper Case = ";
	echo " $output";
 
?>