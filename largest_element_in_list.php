<?php

			/*========================
	Function to find the largest elemnt of array 
			=========================*/
echo "<b><u>Q: find the largest elemnt of array ? </b></u><br>";

	function large($num){

		$larg = $num[0];

		foreach ($num as $value) {
			
			if($larg < $value){

				$larg = $value;
			}
		}
		echo "<br>The Largest array among these is = $larg <br>";
	}
	
	$array = array(2,5,9,1,3,4);

	echo "<br>The Elements of Array are : ";
	foreach ($array as $values) {
		echo " $values";
	}

	large($array);

?>