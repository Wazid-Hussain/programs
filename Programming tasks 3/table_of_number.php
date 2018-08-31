<center><?php
	/*======================================================================================================
		Write a program to find table of a number
	======================================================================================================*/

	echo "<u> <b> Write a program to find table of a number ? </b> </u> <br> <hr>";


	# Given Number 
	$a = 10;

	echo "Given Number is : $a ";
	echo "<br><hr>";

	echo "<b>Table of $a : </b><br>";
	for ($i=1; $i <=10 ; $i++) { 
		
		echo "$a x $i = ".$a*$i."<br>";
	}
?>