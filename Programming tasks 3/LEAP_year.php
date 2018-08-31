<?php
	/*========================================================
		Program to find whether a year is LEAP year or not
	========================================================*/

	echo "<b><u> Q : Write a Program to find whether a year is LEAP year or not ? </b></u> <hr> <br>";


	# The given Year
	$year = 1905;

	echo "The Given Year Is : $year ";

	echo "<br><hr>";


	# check for the Leap year by dividing the year with 4
	if($year%4==0){
		echo "Yes The Year $year is a LEAP Year";
	}
	else{
		echo "No The Year $year Isn't a LEAP Year";
	}

?>