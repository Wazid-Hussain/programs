<?php
	/*===============================
	Code to check the values on odd positions in array
	===============================*/

	echo "<b><u>Q: Code to check the elements of array at odd postions ? </b></u><br>";
	#Given array
	$num = array(10,20,30,40,50,60,70);


	echo "<br>The Elements of Array are : ";
	foreach ($num as $values) {
		echo " $values";
	}
	echo "<br><br>";
	#for printing the odd position numbers
	$c = 1;

	#loop to check the Odd positioned values
	for($i=0; $i<count($num); $i++){

		if($i%2==0){
			echo "The value present on $c Position is : $num[$i]<br>";

			$c+=2;
		}
	}
?>