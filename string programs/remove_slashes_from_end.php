<?php

	/*============================================================
	 Write a PHP script to remove trailing slash from a string
	=============================================================*/


	echo "<b><u>Q : Code to Remove all the zeros at the starting of the string ?</b></u> <br>";

	echo "<hr>";


	#given String  is
	$string = 'The quick brown fox jumps over the lazy dog///';

	echo "The Given String is : $string <br>";


	echo "<hr>";

	$final_value = rtrim($string , '/');


	echo "The String after Removing the '/' is : ";
	echo "$final_value";
?>