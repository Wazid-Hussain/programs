<?php
	/*========================================================================================================
		Program to print the below format
			1 2 3 4 5 6 7 8
			1 2 3 4 5 6 7 
			1 2 3 4 5 6 
			1 2 3 4 5 
			1 2 3 4 
			1 2 3 
			1 2
			1
	=========================================================================================================*/
	echo "<b><u> Q : Write a program To Print The Following pattern  </u> <br>

	1 2 3 4 5 6 7 8 <br>
	1 2 3 4 5 6 7 <br>
	1 2 3 4 5 6   <br>
	1 2 3 4 5 	  <br>
	1 2 3 4 	  <br>
	1 2 3 		  <br>
	1 2			  <br>
	1			  <br>
				  <br>

	</b> <hr> <br>";


	echo "<h3>The Output is : </h3><br>";
	for ($i=8; $i >= 0 ; $i--) { 
		for ($j=1; $j <= $i ; $j++) { 
			 echo " $j ";
		}
		echo "<br>";
	}


?>