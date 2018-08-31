<?php
	/*=========================================================================
	Write a PHP script to remove the Given word from the string.
	=========================================================================*/

	echo "<b><u>Q : Write a PHP script to remove the Given word from the string ? </b></u> <br>";

	echo "<hr>";

	
	#given string
	$string = 'The quick brown fox jumps over the lazy dog';
	echo "The Given String Is : $string <br>"; 


	echo "<hr>";

	# $find is for the word to remove
	$find = 'fox';

	echo "The word to remove is : $find";
	echo "<hr>";

	$s = str_replace($find, ' ', $string);

	echo " New String Is : $s";

	



?>