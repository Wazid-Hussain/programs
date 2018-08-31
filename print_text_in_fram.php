<?php

	
	$array = array("hello", "ddd","World","PHPppppp","CSS","HTMLS","JS","GOOGLE","ch","j","kkk","aaaaaaaaaaaaaaaa","h");

	$max = $array[0];

	print_r($array);


	for ($i=0; $i < count($array); $i++) {
			
			if (strlen($max) < strlen($array[$i])) {
				
				$max = $array[$i];
			}
		
	}

	echo "<br><br>";
	echo strlen($max);

	echo "<br><br>";



	for ($k=-1; $k < count($array)+1; $k++) { 

		for ($l=-1; $l < strlen($max)+1 ; $l++) { 
			
			if($k==0-1 or $l==0-1 or $k == count($array) or $l == strlen($max)){

				echo "*";
			}
			elseif($l == 0){
				echo " $array[$k]";

				for ($m=0; $m < strlen($max) - strlen($array[$k]) ; $m++) { 
					echo " &nbsp; ";
				}
			}
			
		}
		echo "<br>";
	}

?>