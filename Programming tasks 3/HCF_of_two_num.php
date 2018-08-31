<?php
	/*===============================================================================================
		Write a program to find HCF of two numbers
	================================================================================================*/
	echo "<b><u> Q : Write a program to find HCF of two numbers ? </b></u> <hr> <br>";

	# Given Two Numbers
	$a = 10;
	$b = 99;

	echo "Given Two Numbers Are : $a and $b";

	echo "<br> <hr>";

	# check for the higher value for the Loop
	if($a<$b){
		$size = $a;
	}
	else{
		$size = $b;
	}

	# Loop for cheking the HCF
	for ($i=2; $i <= $size; $i++) { 
	
		if($a%$i==0 && $b%$i==0){
			$hcf = $i;
		}
		else{

			$hcf = 'No HCF For '. $a . ' and ' . $b .' ';
		}
	}


	 echo "The HCF For $a and $b = $hcf";

?>