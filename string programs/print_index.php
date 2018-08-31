<?php

	/*============================================================
	Print Only the Index.php only from a given URL
	=============================================================*/


	echo "<b><u>Q : Code to Print Only the Index.php only from a given URL ?</b></u> <br>";

	echo "<hr>";
	#given URL is
	$url = 'www.example.com/public_html/index.php';

	echo "The URL Is : $url <br>";


	echo "<hr>";


	#temp variable is to hold the temporary last block of url
	$temp = '';

	#last variable is to hold the final output
	$last = '';

	# $a variable is to define the $last index positions
	$a = 0;


	#This loop is for extracting the last block from url leading with a '/' symbol
	for ($j=strlen($url)-1; $j > 0 ; $j--) { 
	

		if ($url[$j] == '/') {
		
			break;
		}

		$temp[$a] = $url[$j];

		$a++;

	}


	# This loop is for ordring the last block name in Left To Right way
	for ($k=strlen($temp)-1; $k >=0 ; $k--) { 

		$last[$a] = $temp[$k];

		$a++;

	}
	echo "$last";






/*


echo substr(strrchr($vas , '/'),1);


echo "<br>";
echo "<br>";



$email = 'ray@gmail.com';

for ($i=0; $i < strlen($email) ; $i++) { 
	
	if($email[$i] == '@'){
		break;
	}

	echo "$email[$i]";
}
*/

?>