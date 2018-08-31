<?php

	/*============================================================
	Code to convert integer into string
	=============================================================*/


	echo "<b><u>Q : Code to Convert An integer value to String Value ?</b></u> <br>";

	echo "<hr>";
	#given integer value is
	$val = 13344;

	echo "The Given Integer Value Is : $val <br>";


	echo "<hr>";


	#(string function is used to change the values to String)
	$vas = (string)($val);
	

	#printing the Changed string value
	var_dump($vas);





/*
for ($j=strlen($vas)-1; $j > 0 ; $j--) { 
	

	if ($vas[$j] == '/') {
		
		echo $vas[$j];

		break;
	}
}









echo substr(strrchr($vas , '/'),1);


echo "<br>";
echo "<br>";



$email = 'ray@gmail.com';

for ($i=0; $i < strlen($email) ; $i++) { 
	
	if($email[$i] == '@'){
		break;
	}

	echo "$email[$i]";
}
*/

?>