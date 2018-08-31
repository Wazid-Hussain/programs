<?php
	/*=======================================================================================================
		Write a program to concatenate two strings character by character. e.g : JOHN + SMITH = JSOMHINTH
	========================================================================================================*/


	$a = "ABC";
	$b = "TUVWXYZ";

	if($a>=$b){
		$size = strlen($a);
	}
	else{
		$size = strlen($b);
	}

	$con = '';

	$c = 0;

	for($i=0;$i<$size;$i++){

			$con[$c] = $a[$i];

			++$c;

			$con[$c] = $b[$i];
			
			++$c;

		echo "<br>";
	}

	echo "$con";









?>