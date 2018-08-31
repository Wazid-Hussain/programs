<?php
	/*=========================================================================
	 Write a PHP script to print the next character of a specific character.
	=========================================================================*/

	echo "<b><u>Q :  Write a PHP script to print the next character of a specific character ? </b></u> <br>";

	echo "<hr>";

	$char = 'z';

	echo "Entered character is : $char <br>";

	echo "The Next char is : ";

	switch ($char) {
		case 'a':
			echo "b";
			break;
		case 'b':
			echo "c";
			break;
		case 'c':
			echo "d";
			break;
		case 'd':
			echo "e";
			break;
		case 'e':
			echo "f";
			break;
		case 'f':
			echo "g";
			break;
		case 'g':
			echo "h";
			break;
		case 'h':
			echo "i";
			break;
		case 'i':
			echo "j";
			break;
		case 'j':
			echo "k";
			break;
		case 'k':
			echo "l";
			break;
		case 'l':
			echo "m";			
			break;
		case 'm':
			echo "n";			
			break;
		case 'n':
			echo "o";			
			break;
		case 'o':
			echo "p";			
			break;
		case 'p':
			echo "q";			
			break;
		case 'r':
			echo "s";			
			break;
		case 's':
			echo "t";			
			break;
		case 't':
			echo "u";			
			break;
		case 'u':
			echo "v";			
			break;
		case 'v':
			echo "w";			
			break;
		case 'w':
			echo "x";			
			break;
		case 'x':
			echo "y";			
			break;
		case 'y':
			echo "z";			
			break;
		case 'z':
			echo "a";			
			break;
		default:
			echo "Please Enter a valid char in lower case";
			break;
	}


echo "<br> <hr>";

	$ch = 'Z';

	echo "Entered character is : $ch <br>";


	echo "The Next char is : ";

	
	$nxtch = '';
	

	if($ch == 'z'){
		echo "a";
	}
	elseif($ch == 'Z'){
		echo "A";
	}
	else{
		$nxtch = ++$ch;
	}
	echo "$nxtch";



?>