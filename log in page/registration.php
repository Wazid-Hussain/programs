<?php

session_start();

if(isset($_SESSION['id'])){

	header('location: http://localhost/learn.php/log%20in%20page/homepage.php');
}


/*=================================DATABASE Connection File==================================================*/

	$dbcon = mysqli_connect('localhost' , 'root' , '' , 'test_db');
	if(!$dbcon){
		die("Error : " .mysqli_error($dbcon));
	}

/*======================================================================================*/
	
		# Only submit data when user click on the registration button
		if(isset($_POST['register'])){
			
			# Variables to hold the data from html input tags
			$user_name = $_POST['username'];
			$full_name = $_POST['full_name'];
			$contact = $_POST['contact'];
			$e_mail = $_POST['email'];
			$password = $_POST['password'];


		# SQL query to insert the data into databse
		$sql = "INSERT INTO login ( username , full_name , contact , email , password) VALUES ( '$user_name' , '$full_name' , '$contact' , '$e_mail' , '$password')";
		$run = mysqli_query($dbcon , $sql);

		if(!$run){
			die("ERROR" . mysqli_error($dbcon));
		}
		else{

			header('location: http://localhost/learn.php/log%20in%20page/homepage.php');
		}


		}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="rgbox">
	<div class="rgform_box">
		<form action="" method="POST">
			<h3 class="alert"></h3><br>
			<label>USER NAME : <br> </label><input type="text" name="username" placeholder="User Name Here"></input><br>
			<label>FULL NAME : <br> </label><input type="text" name="full_name" placeholder="full name"></input><br>
			<label>CONTACT :   <br> </label><input type="text" name="contact" placeholder="contact number"></input><br>
			<label>E-MAIL : <br> </label><input type="mail" name="email" placeholder="E-Mail"></input><br>
			<label>PASSWORD :  <br> </label><input type="password" name="password" placeholder="Password Here"></input><br>

			<button type="submit" name="register"> Register </button>

			<p>Already Registered : <a href="http://localhost/learn.php/log%20in%20page/log_in.php">click here to log-in</a></p>
		</form>
	</div>
</div>
</body>
</html>