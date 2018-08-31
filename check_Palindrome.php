<?php
	/*===================================
	check the string is palindrome or not
	====================================*/

	echo "<b><u>Q: Code to check the Given string is Palindrome ? </b></u><br>";



	#$name is any given word to check
	$name = "makdam";

	echo "<br> The Given Word Is : $name";
	#$rev is to store the Reversed form of word
	$rev = "";

	echo "<br>";
	#Loop for reversing the string
	for ($i=strlen($name)-1; $i >=0 ; $i--) { 
		
		$rev .= $name[$i];
	}


	#condition to check whether the reversed string is matched with the orginal string or not
	if($name==$rev){

		echo "<br>Yes!!!The Word $name is a Palindrome";
	}
	else{

		echo "<br>No!!!!The Word $name isn't a Palindrome";
	}

?>