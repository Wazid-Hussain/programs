<?php

	/*===========================================================
function that concatenates two array [a,b,c], [1,2,3] → [a,1,b,2,c,3]
	============================================================*/


	echo "<b><u>Q: Code To Concate two arrays like : [a,b,c], [1,2,3] → [a,1,b,2,c,3] ? </b></u><br>";


	#Two Givens array
	$a = array('a','b','c','d','e');
	$b = array(1,2,3,4,5,6,7,8);


	#Finding the array which is Big in size between Both given arrays
	if(count($a) >= count($b)){
		$size = count($a);
	}
	else{
		$size = count($b);
	}

	echo "<br>The Elements of Array 'A' : ";
	
	for ($ele=0; $ele <count($a) ; $ele++) { 
		
		echo "$a[$ele]";
	}

	echo "<br>";

	echo "<br>The Elements of Array 'B' : ";
	
	for ($eleb=0; $eleb <count($b) ; $eleb++) { 
		
		echo "$b[$eleb]";
	}

	#Empty variables two holds the final result
	$concate = array();


	#loop to concate variable
	for($i=0; $i< $size; $i++){


		if($i < count($a)){
			$concate[] = $a[$i];
		}
			
		$concate[] = $b[$i];
		

	}


	#print Final array
	echo "<br> <br> The Output Is :  ";

	foreach ($concate as $value) {
		echo "$value";
	}


?>