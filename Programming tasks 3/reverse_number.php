<?php
	/*========================================================
		Write a program to print Reverse of any number
	========================================================*/

	echo "<b><u> Q : Write a program to print Reverse of any number ? </b></u> <hr> <br>";

	$num = 56789;

	echo "The Given Number Is : $num";

	echo "<br><hr>";

	# op is to hold the Final Output
	$op = 0;

	while($num > 1){

		$reverse = $num%10;
		$op =  $op * 10 + $reverse;
		$num = (int)$num / 10;
	}

		echo "The Reverse of Given Number  Is : ";
		echo "$op";
?>