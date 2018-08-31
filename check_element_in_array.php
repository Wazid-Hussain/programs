<?php

	/*==================================================
	checking whether the element occure in the array
	==================================================*/

	echo "<b><u>Q: Code to check the element ocure in array or not ? </b></u><br>";
	# Given Array
	$num = array(10,20,30,40,50,60,4);

	echo "<br>The Elements of Array are : ";
	foreach ($num as $values) {
		echo " $values";
	}


	#value to find
	$a = 104;

	echo " </br> Value to find is = $a";
	#temp variable just to make a decision
	$b = 0;

	#loop for checking the value
	for ($i=0; $i<count($num) ; $i++) { 
		
		if($num[$i]==$a){

			$b = $a;
		}


	}


	echo "<br>";
	#Condition for printing the output
	if($b == $a){
		echo "Yes! $a Available in the array";
	}
	else{
		echo "No $a Not found in the array";
	}
?>