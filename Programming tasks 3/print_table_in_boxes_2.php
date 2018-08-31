<?php
	/*===============================================================================
		Write a program to Print table of a number in following way within the table
	================================================================================*/


?>
	<u><b> Q : Write a program to Print a number table inside a Table Format ?</b></u><hr>

<table border="1px solid black" cellpadding="4px">

	<h4> The Output Is : </h4>
<?php


	for ($i=1; $i <= 10; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= 10 ; $j++) { 
			
				echo "<td> " .$i * $j." </td>";
		}


		echo "<tr>";
	}
?>

</table>

