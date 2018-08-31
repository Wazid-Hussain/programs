<?php
	/*======================================================================================================
		Write a program to find factor of any number
	======================================================================================================*/

	echo "<u> <b> Write a program to find factor of any number ? </b> </u> <br> <hr>";


	# Given Number 
	$a = 100;

	echo "Given Number is : $a ";

	echo "<br><hr>";

	echo "The Factors for $a : ";
	for ($i=1; $i <= $a ; $i++) { 
		
		if($a%$i==0){
			
			echo " $i ";
		}
	}
?>