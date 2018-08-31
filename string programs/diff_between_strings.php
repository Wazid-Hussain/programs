<?php

	/*============================================================
	Write a PHP script to find the first character that is different between two strings.
	=============================================================*/


	echo "<b><u>Q : Write a PHP script to find the first character that is different between two strings. ?</b></u> <br>";

	echo "<hr>";
	

	$str1 = 'abc';

	$str2 = 'abe';


	echo "Given Two Strings are : <br>";


	echo "$str1 <br>";
	echo "$str2 <br>";

	for ($i=0; $i < strlen($str1) ; $i++) { 
			
			if($str1[$i] == $str2[$i]){

			}

			else{
				echo "The Diffrence between both strings at $i Position With '$str1[$i]' Vs '$str2[$i]'    <br>";
				break;
			}	
	}


?>