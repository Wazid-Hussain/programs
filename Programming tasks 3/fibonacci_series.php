<?php
	/*========================================================
		Write a program to print Fibonacci series
	========================================================*/

	echo "<b><u> Q : Write a program to print Fibonacci Series ? </b></u> <hr> <br>";

	$a = 0;
	$b = 1;

	$fibo_series = 0;


	echo "$a \t";
	echo "$b \t";

	for ($i=0; $i < 10 ; $i++) { 
		
		$fibo_series = $a + $b;

		$a = $b;
		$b = $fibo_series;

		echo "$fibo_series \t";
	}

?>