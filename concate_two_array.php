<?php
	/*=========================================================
concatenates two array. [a,b,c], [1,2,3] → [a,b,c,1,2,3]
	=========================================================*/
	
	echo "<b><u>Q: Code To Concate two arrays like : [a,b,c], [1,2,3] → [a,b,c,1,2,3] ? </b></u><br>";

	#Given arrays
	$a = array('a','b','c');
	$b = array(1,2,3);

	echo "<br>The Elements of Array 'A' : ";
	
	for ($ele=0; $ele <count($a) ; $ele++) { 
		
		echo "$a[$ele]";
	}

	echo "<br>";

	echo "<br>The Elements of Array 'B' : ";
	
	for ($eleb=0; $eleb <count($a) ; $eleb++) { 
		
		echo "$b[$eleb]";
	}

	#empty array to hold he final result
	$concate = array();


	#Loop for add first array to empty array
	for($i=0; $i<count($a); $i++){

		$concate[] = $a[$i];

	}


	#Loop for add second array to $concate array
	for ($j=0; $j <count($b) ; $j++) { 
		
		$concate[] = $b[$j];
	}

	echo "<br><br> The Output Is : ";

	#Print the array
	foreach ($concate as $v) {
		echo "$v";
	}


?>