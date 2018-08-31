<?php
	/*=========================================================================
	Write a PHP script to get the filename component of the following path. "https://www.w3resource.com/index.php"
	=========================================================================*/

	echo "<b><u>Q : Write a PHP script to get the filename component of the following path.
		'https://www.w3resource.com/index.php' ? </b></u> <br>";

	echo "<hr>";

	$url = 'https://www.w3resource.com/index.php';

	echo "Given URL is : $url <br>";

	$file_name = basename($url, ".php");


	echo "<br>  The File Name is : ";
	echo "$file_name";




?>