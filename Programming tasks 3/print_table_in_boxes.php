<?php
	/*===============================================================================
		Write a program to Print table of a number in following way within the table
		--------------------------
		|1*1=1|1*2=2|1*3=3|1*4=4|
		|2*1=2|2*2=4|2*3=6|2*4=8|
		|3*1=3|3*2=6|3*3=9|3*4=12|
		--------------------------





	================================================================================*/


?>
	<u><b> Q : Write a program to Print a number table inside a Table Format ?</b></u><hr>

<table border="1px solid black" cellpadding="10px">

	<h4> The Output Is : </h4>
<?php


	for ($i=1; $i <= 6; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= 5 ; $j++) { 
			
				echo "<td> $i * $j = " .$i * $j." </td>";
		}


		echo "<tr>";
	}
?>

</table>

