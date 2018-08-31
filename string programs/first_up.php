<?php

	$name = "PHP is always awesome";

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