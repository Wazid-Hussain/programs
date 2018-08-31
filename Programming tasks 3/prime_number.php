<?php
	/*========================================================
		Write a program To check whether a number is Prime or not
	========================================================*/

	echo "<b><u> Q : Write a program To check whether a number is Prime or not ? </b></u> <hr> <br>";


	# The given Value
	$a = 31;

	echo "The Given Number Is : $a ";

	echo "<br><hr>";

	# $count Variable is help to check for the more then zero divisor for the number
	$count = 0;

	for ($i=2; $i < $a ; $i++) { 
		
		if($a % $i == 0){
			++$count;
			break;
		}
	}


	# check wether the number is prime or not
	if($count == 0){
		echo "The Number $a is a Prime Number  ";
	}
	else{
		echo "No The Number $a isn't a prime Number";
	}

?>