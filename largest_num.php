<?php

echo "<b><u>Q: Code To Find The Largest Number among the elemnts of the array ? </b></u><br>";

	$num = array(-1,-10,-50);

	echo "The Elments of the array are : ";
	foreach ($num as $value) {
		
		echo "$value,";
	}
	$larg = $num[0];

	for($i=0; $i<count($num); $i++){

		if($larg < $num[$i]){
			$larg = $num[$i];
		}
	}

	echo "<br>The largest Number in this array is :";
	echo "$larg";
?>