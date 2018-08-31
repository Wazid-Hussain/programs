<?php

/*==================
Reversing an array ????
====================*/

echo "<b><u>Q:1 Write a Code to Reverse  the array ? </b></u><br>";

	$num = array(1,2,3);
	echo "<br>The Given Array is : ";
	foreach ($num as $values) {
		echo "$values";
	}
	
echo "<br> ";

#1. just printing the array in reverse order...

	echo "<br>This is Just a Reverse Printed Array : ";
	for($i=count($num)-1; $i>=0; $i--){

		echo "$num[$i]";
	}

echo "<br> ";


#2. Reversing the values of the array into another array

	echo "<br>This is The Reversed Array : ";
	$temp_array = array();
	for($j=count($num)-1; $j>=0; $j--){

		$temp_array[] = $num[$j];

	}

	foreach ($temp_array as $values) {

		echo "$values";
	}
	
?>
