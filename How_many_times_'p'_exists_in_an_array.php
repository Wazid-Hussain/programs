<?php 

	if(isset($_POST['submit'])){

		$array = array();
		$elements = $_POST['elements'];
		$size = strlen($elements);
		$num = 0;
		$count = 0;
		$str = '';

		for ($i=0; $i < $size ; $i++) { 			
			
				if ($elements[$i] == ',') {			
					
					$array[$num++] = $str;
					$str = '';
				}
				else{

					$str .= $elements[$i];

					if ($elements[$i] == 'p') {
						$count++;
					}

				}		

		}
		$array[$num++] = $str;
		
		foreach ($array as $value) {
			echo "\t".$value."\t,";
			
		}

		echo "<br><hr>";
		echo "".$count."Times '2' Occur In the Given Array";
		echo "<br><hr>";



		

	}

?>











<!DOCTYPE html>
<html>
<head>
	<title>How Many Time A Value Exists In an array</title>
</head>
<body>

	<form method="POST" action="">

		<label>Type Elements of array Seprated By ','(comma)</label>
		<input type="text" name="elements">
		<button type="submit" value="Submit" name="submit">SUBMIT</button>
		
	</form>

</body>
</html>