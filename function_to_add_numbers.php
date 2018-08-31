<?php
	/*==================================================================
	functions that compute the sum of the numbers in an array: using a for-loop and  while-loop
	===================================================================*/

	echo "<b><u>Q: Code To Sum of All The elements by using For Loop and While Loop  ? </b></u><br>";

	#Any Given Array to sum
	$numbers = array(10,20,30,40);

	echo "<br>The Elements of Array are : ";
	foreach ($numbers as $values) {
		echo " $values";
	}
	echo "<br><br>";
	#Function to add numbers of $numbers array using for loop
	function sum_for($num){

		#$add variable is for hold the sum
		$add = 0;

		for ($i=0; $i <count($num) ; $i++) { 
			
			$add += $num[$i];
			
		}
		echo " The sum of numbers of array using For Loop :$add";
	}


	#Function to add numbers of $numbers array using While loop
	function sum_while($num){

		#$s variavle is to find the length of the array
		$s = count($num)-1;


		#$add variable to holds the sum
		$add = 0;

		#$j Variable is to set the initial point of the while loop
		$j = 0;

		while($j <= $s ){

			$add +=$num[$j]; 

			#$J++ is to increament the value of $j by one with each execution of the loop
			$j++;
		}
		echo " The sum of numbers of array using While Loop :$add";
	}


	# Calling of functions
	sum_while($numbers);

	echo "<br>";

	sum_for($numbers);
?>