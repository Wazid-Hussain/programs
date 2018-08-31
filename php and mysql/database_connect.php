<?php

		/*=========================================================================================
			PHP Code to make a Database connection
		========================================================================================*/
	

	# these 4 variables are used to hold the required credentials for database connect like database user name, password, database name.
	$hostname = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'test_db';


	# mysqli_connect is a php function that used to make a connection with the database
	$link = mysqli_connect("$hostname" , "$db_user" , "$db_pass" , "$db_name");


	# This block is to check and print if there any error in the connection
	if(!$link){
		die('Database not connected' . mysqli_connect_error());
	}


?>