<?php

		/*=========================================================================================
			PHP Code to insert data to database
		========================================================================================*/
	
	
	# include the database connection file to current file 
	include('database_connect.php');


	$sql = "INSERT INTO users (firstname, lastname, contact, email) VALUES ('', '' , '' , '')";

	$run = mysqli_query($link , $sql);

	if($run){
		echo "Data Inserted Successfully";
	}
	else{
		echo "Data Not Inserted" . mysqli_error($link);
	}


?>