<?php
	/*=======================================================================
	Remove Commas From String
	=======================================================================*/

	echo "<b><u> Q : Write a PHP code to remove all the comma(s) from the String ?</b></u> <hr></br>";

	$string = '2,82,960.50';

	echo "Given String is : $string";

	echo "<hr>";

	$final = '';

	$c = 0;

	for ($i=0; $i < strlen($string)-1 ; $i++) { 

		if (ord($string[$i]) == 44) {
			
		}
		else{
			$final[$c] = $string[$i];

			$c++;
		}
	}

	echo "The Output Without Commas is : $final";
	
?>