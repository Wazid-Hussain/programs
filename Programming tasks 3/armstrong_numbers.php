<?php
	/*================================================================================
		Write a program to Check wether a number is Armstrong numbers or Not
	================================================================================*/

	echo "<b><u> Q : Write a program to Check wether a number is Armstrong numbers or Not ? </b></u> <hr> <br>";

	# $num is the Given Number
	$num = 370;

	echo "The Given Number is : $num";

	echo "<br><hr>";

	# to hold the sum of values after multypling the numbers
	$sum = 0;

	# to convert the $num into string
	$st =   (string)($num);

	# to get the size of the Number
	$size = strlen($st);

	# initializing the variable $a to store the multyplication result
	$a = 1;


	for ($i=0; $i < $size ; $i++) { 
		for ($j=0; $j < $size ; $j++) { 

			$a *= $st[$i];
		}

		$sum += $a;

		$a = 1;		
	}


	# to check the wether the number is armstrong or not
	if($sum == $num){
		echo " Yes The Number : $num : is an armstrong";
	}
	else{
		echo " No The Number : $num : isn't an armstrong";
	}

?>