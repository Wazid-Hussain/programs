<?php

	/*============================================================
	Print Only the name of the user from the given email
	=============================================================*/


	echo "<b><u>Q : Code to Print Only the name of user from an E-Mail ?</b></u> <br>";

	echo "<hr>";
	#given URL is
	$mail = 'User.123@testmal.com';

	echo "The Given Mail Is : $mail <br>";


	echo "<hr>";
	echo "<br>";


	# Loop for Extracting the user name part from the mail With the help of '@' Sign
	for ($i=0; $i < strlen($mail) ; $i++) { 
		
		if($mail[$i] == '@'){
			break;
		}

		echo "$mail[$i]";
	}

?>