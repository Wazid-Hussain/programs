<?php
	/*========================================================================================================
		Program to print the below format
		* * * * *
		*       *
		*       *
		*       *
		* * * * *
	=========================================================================================================*/
	echo "<b><u> Q : Write a program To Print The Following pattern  </u> <br>

		* 		* 		* 		*     *		<br>
		* &nbsp; &nbsp; &nbsp; &nbsp; *		<br>
		* &nbsp; &nbsp; &nbsp; &nbsp; *		<br>
		* &nbsp; &nbsp; &nbsp; &nbsp; *		<br>
		* 		* 		* 		* 	  *		<br>

	</b> <hr> <br>";


	echo "<h3>The Output is : </h3><br>";
	
	for ($i=0; $i <= 5; $i++) { 
		
		for ($j=0; $j <= 5; $j++) { 
			
			if($i==0 ||$j==0 || $i==5 ||$j==5){
				echo "*";
			}
			else{
				echo " &nbsp; ";
			}
		}
		echo "<br>";
	}


?>