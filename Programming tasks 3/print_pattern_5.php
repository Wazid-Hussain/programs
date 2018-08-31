<?php
	/*========================================================================================================
		Program to print the below format
		1 5 9
		2 6 10
		3 7 11
		4 8 12
	=========================================================================================================*/
	echo "<b><u> Q : Write a program To Print The Following pattern  </u> <br>

		1 5 9		<br>
		2 6 10		<br>
		3 7 11		<br>
		4 8 12		<br>

	</b> <hr> <br>";

	$num = 4;
	echo "<h3>The Output is : </h3><br>";


	for ($i=1; $i <= $num ; $i++) { 

		echo "$i \t\t";
		$a = $i;

		for ($j=1; $j <=2 ; $j++) { 
			$a +=$num;

			echo "$a \t\t";
		}
		echo "<br>";
		
	}


?>