<?php
	/*====================================================================================
			Code to SELECT data from Database and display it on web page
	=====================================================================================*/

	# including database connecting file
	include('database_connect.php');


	# select all data from users table
	$sql = " SELECT * FROM users";

	# execute the sql query in php
	$run = mysqli_query($link , $sql);

	#check that code run successfully or not
	if(!$run){
		echo "error" .mysqli_error($link);
	}


	# This is to fetch that Rows with desire credantials are found
	$result_check = mysqli_num_rows($run);


	#this condition is for to check is their any result is is available or not
	if($result_check > 0){

		# Fetch the data in the form of Array
		while($data = mysqli_fetch_array($run)){

			# displaying data such as id's and contacts 
			echo "$data[id] ";
			echo " $data[contact] <br>";

		}


	}
	#	display error if there isn't any row founds
	else{
		echo "Error : " . mysqli_error($link);
	}
?>