<?php

		/*=========================================================================================
			PHP Code to Create a table in the database
		========================================================================================*/
	

	# include the database connection file to current file
	include('database_connect.php');


	# This is the mysql query to creating a tabel with the feilds such as id, firstname, lastname, email
	$sql = "CREATE TABLE users (
				id INT(3) AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(50) NOT NULL,
				lastname VARCHAR(50) NOT NULL,
				contact INT(11) NOT NULL,
				email VARCHAR(20) NOT NULL
			)";


	# mysqli_query is used to execute the mysql queris
	$run = mysqli_query($link , $sql);


	# Thsi block is used to print an error or Successfull message 
	if(!$run){
		echo "error" . mysqli_error($link);
	}
	else{
		echo "Table Sucessfully Created";
	}
?>