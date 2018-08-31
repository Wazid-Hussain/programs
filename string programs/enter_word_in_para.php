<?php
	/*=========================================================================
	Write a PHP script to insert a string at the specified position in a given string.
	=========================================================================*/

	echo "<b><u>Q : Write a PHP script to insert a string at the specified position in a given string. ? </b></u> <br>";

	echo "<hr>";

	
	#given string
	$string = 'The  brown fox';
	echo "The Given String Is : $string <br>"; 


	echo "<hr>";

	# $find is for the finding the axact word before preior we want to enter a new word

	$find = 'brown';
	echo "Word before we want to add new string is : $find <br>";


	echo "<hr>";

	$test = strpos($string, $find);

	$word = 'quick ';


	$s = substr_replace($string, $word, $test,0);

	echo " New String Is : $s";

	



?>