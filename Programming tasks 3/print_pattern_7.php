<?php
	/*========================================================================================================
		Program to print the below format
		*0
		***00
		******000
		**********0000
		***************00000
	=========================================================================================================*/
	echo "<b><u> Q : Write a program To Print The Following pattern  </u> <br>

		*0						<br>
		***00					<br>
		******000				<br>
		**********0000			<br>
		***************00000	<br>

	</b> <hr> <br>";

	$num = 0;
	
	echo "<h3>The Output is : </h3><br>";


	for ($i=1; $i <= 5 ; $i++) { 

		$num += $i;

		for ($j=1; $j <=$num ; $j++) { 
			echo "*";
		}

		for ($k=1; $k <= $i ; $k++) { 
			echo "0";
		}
		echo "<br>";
		
	}


?>