<?php
	/*=========================================================================
	Program to Split a string  Like :

	*) '082307' to 08:23:07
	=========================================================================*/

	echo "<b><u>Q : Code To Split a string like '082307' To 08:23:07 ? </b></u> <br>";

	echo "<hr>";
	#given string
	$string = '082307';

	echo "The Given String Is : $string <br>";


	echo "<hr>";
	

	/*
		  Sub string to create another sub string of the string
	      chunk_split is to create the blocks of 2 characters with a symbol of ":"

	      here :
	      2 is the block size.
	      ':' is the sepration symbol.
	      0 is the starting point for sub string.
	      -1 is the end point of substring i.e n-1
    */
	      
	$op = substr(chunk_split($string , 2, ':'), 0, -1);

	echo "$op";



?>