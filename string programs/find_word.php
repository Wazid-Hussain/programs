<?php
	/*=========================================================================
	Program check if a string contains a specific string ?
	=========================================================================*/

	echo "<b><u>Q : Code To check if a string contains a specific string ? </b></u> <br>";

	echo "<hr>";

	
	#given string
	$string = 'The quick brown fox jumps over the lazy dog';
	echo "The Given String Is : $string <br>"; 


	echo "<hr>";

	#$find is The Word To Find
	$find = 'late';
	echo "Word to Find is : $find <br>";


	echo "<hr>";


	#strpos is used to check the particular word is present in the word or not
	if(strpos($string, $find) == true){
		echo "Yes ! The Word  ' $find ' is Present in the Word";
	}
	else{
		echo "No ! The Word  ' $find ' isn't Present in the Word";
	}



	



?>