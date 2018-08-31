<?php

/*==============================================================
merges two arrays into a new sorted sorted. [1,4,6],[2,3,5] → [1,2,3,4,5,6]
==============================================================*/

	echo "<b><u>Q: Code To Concate two arrays and sort the final array like  : [1,4,6],[2,3,5] → [1,2,3,4,5,6] ? </b></u><br>";

	#Given arrays
	$a = array(1,4,6);
	$b = array(2,3,5);

	echo "<br>The Elements of Array 'A' : ";
	
	for ($ele=0; $ele <count($a) ; $ele++) { 
		
		echo "$a[$ele]";
	}

	echo "<br>";

	echo "<br>The Elements of Array 'B' : ";
	
	for ($eleb=0; $eleb <count($a) ; $eleb++) { 
		
		echo "$b[$eleb]";
	}

	#Empty Array to hold the Final sorted array
	$concate = array();


	#Loops for marging the Both arrays into one
	for($i=0; $i<count($a); $i++){
		$concate[] = $a[$i];
			for ($j=$i; $j <=$i ; $j++) { 
			
				$concate[] = $b[$j];
			}
	}


	#sorting the Final array
	for ($k=0; $k <count($concate) ; $k++) { 
		for ($l=0; $l <count($concate) ; $l++) { 
			
			if($concate[$k] < $concate[$l]){
				$temp = $concate[$k];
				$concate[$k] = $concate[$l];
				$concate[$l] = $temp;
			}
		}
	}

	

#printing the final sorted array
echo "<br> <br> The Output Is :  ";

	foreach ($concate as $value) {
		echo "$value";
	}

?>