<?php

		/*=========================================================================================
			PHP Code to Update user data into the database table
		========================================================================================*/
	
	
	# include the database connection file to current file 
	include('database_connect.php');


	$sql = "UPDATE users SET contact='123456789' WHERE firstname='wazid' ";

	$run = mysqli_query($link , $sql);

	if($run){
		echo "Data Updated Successfully";
	}
	else{
		echo "Data Not updated" . mysqli_error($link);
	}


?>