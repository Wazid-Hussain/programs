<?php
	/*==================================================================
		Write a program to Print Check Pattern
	===================================================================*/


?>
	<u><b> Q : Write a program to Print Check Pattern ?</b></u><hr>

<table border="1px solid black" cellpadding="10px">


<?php


	for ($i=0; $i < 8; $i++) { 
		echo "<tr>";
		for ($j=0; $j <= 8 ; $j++) { 
			
			$sum = $i + $j;
			if($sum%2 == 0 ){
				echo "<td  style="."background:black;"."> </td>";
			}
			else{
				echo "<td> </td>";
			}
		}

		echo "<tr>";
	}
?>

</table>

