<?php

echo "<b><u>Q: Code To Sort the elemnts of the array ? </b></u><br>";

	$num = array(1,3,2,4,6,2,7);


	echo "<br> The Elments of the array are : ";
	foreach ($num as $value) {
		
		echo "$value,";
	}

	echo "<br>";

	for($i=0; $i<count($num); $i++){

		for ($j=$i; $j <count($num); $j++) { 
			
			if($num[$i] > $num[$j]){

				$temp = $num[$i];
				$num[$i] = $num[$j];
				$num[$j] = $temp;
			}
			
		}
	}
	echo "<br> The Sorted array is : ";
	foreach ($num as $v) {
		echo "$v,";
	}
	
?>
