<?php
/*========================================================================================
code to find the list of the first 100 Fibonacci numbers
=======================================================================================*/

echo "<b><u>Q : Compute the first 100 Fibonacci Numbers ? <br></b></u>";


	
	$num1 = 0;
	$num2 = 1;

	$fibo_num = 0;


	echo "The first 100 Fibonacci Numbers are : <br>";

	echo "$num1 <br>";
	echo "$num2 <br>";

	for($i=0; $i<100; $i++){

		$fibo_num = $num1 + $num2;

		$num1 = $num2;
		$num2 = $fibo_num;

		echo "$fibo_num <br>";
	}

?>