<?php
	/*=========================================================================
	Write a PHP script to replace multiple characters from the following string.
	=========================================================================*/

	echo "<b><u>Q : Write a PHP script to replace multiple characters from the string ? </b></u> <br>";

	echo "<hr>";

	
	#given string
	$string = '\"\1+2/3*2:2-3/4*3';
	echo "The Given String Is : $string <br>"; 


	echo "<hr>";

	# $find is use to store the multiple characters in form of array to remove
	$find = array('"', '+', '-','*','/',':','\\');


	$s = str_replace($find, ' ', $string);

	echo " New String Is : $s";

	
?>