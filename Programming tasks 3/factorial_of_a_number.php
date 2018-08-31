<?php
	/*========================================================
		Write a program to print Factorial of any number
	========================================================*/

	echo "<b><u> Q : Write a program to print Factorial of a Given Number ? </b></u> <hr> <br>";


	# num is the Given number to create factorial
	$num = 10;

	echo "The Given Number is = $num <br>";

	# total variable is used to hold the factorial of the Given Number
	$total = $num;


	echo "The Factorial of $num = ";

	echo $num;
	for($i=$num -1 ; $i>0 ; $i--){
		
		echo " x $i";

		$total *= $i;
	}


	echo " = $total";

?>