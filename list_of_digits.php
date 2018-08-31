<?php
/*========================================================================================
code to find the list of the first 100 Fibonacci numbers
=======================================================================================*/

echo "<b><u>Q : Code to give the list of the Digits of a Number ? <br></b></u>";



$num = 300;


$digit = array();

echo "The Given Number is : $num <br>";

while ($num > 0) {

	
	$digit = $num % 10;

	$num = (int) ($num /= 10);

	echo "<br> $digit <br>";

}

?>