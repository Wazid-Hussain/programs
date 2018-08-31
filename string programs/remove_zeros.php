<?php

	/*============================================================
	Remove all the zeros '0' from the starting of the string
	=============================================================*/


	echo "<b><u>Q : Code to Remove all the zeros at the starting of the string ?</b></u> <br>";

	echo "<hr>";


	#given String  is
	$string = '00054789';

	echo "The Given String is : $string <br>";


	echo "<hr>";

	$final_value = ltrim($string , 0);


	echo "The String after Removing the 0 is : ";
	echo "$final_value";
?>