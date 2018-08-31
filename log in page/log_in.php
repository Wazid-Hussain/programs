<?php

	#to start a session
	session_start();

/*=================================DATABASE Connection File==================================================*/

	$dbcon = mysqli_connect('localhost' , 'root' , '' , 'test_db');
	if(!$dbcon){
		die("Error : " .mysqli_error($dbcon));
	}

/*======================================================================================*/
	
	# error message when user not found in database
	$error = '';

	


/*============================ SQL PART=======================================================*/	

		# Only execute when the user click on the LOG IN button
		if(isset($_POST['login'])){

				#store the user name and password 
				$user_name = $_POST['username'];
				$password = $_POST['password'];
				

				# SQL query to select data from the database
				$sql = "SELECT * FROM login WHERE username = '$user_name' and password = '$password' ";
				$run = mysqli_query($dbcon , $sql);

				# To check if there any error while executing the sql code
				if(!$run){
					echo "ERROR" . mysqli_error($dbcon);
				}
				
				
				# To get the numbers of rows according to the user credentials
				$result = mysqli_num_rows($run);

				# check is there any row present in the database
				if($result > 0){

					# Fetch the data in form of array and start the session with the associated 'id'
					$data = mysqli_fetch_assoc($run);
						$_SESSION['id'] = $data['id'];
				}
				else{
						$error = 'No User Found <hr>';
				}
		}

		

?>


<!--==================================HTML PART==============================================-->


<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
#check if the session is start or not if not then this part will execute
if (!isset($_SESSION['id'])){
?>


<div class="box">
	<div class="form_box">
		<form action="" method="POST">
			<h3 class="alert"><?php echo $error; ?></h3><br>
			<label>USER NAME : <br> </label><input type="text" name="username" placeholder="User Name Here"></input><br>
			<label>PASSWORD : <br> </label><input type="password" name="password" placeholder="Password Here"></input><br>

			<button type="submit" name="login"> LOG IN </button>

			<p>Not Register Yet : <a href="http://localhost/learn.php/log%20in%20page/registration.php">click here to register</a></p>
		</form>
	</div>
</div>

<?php
}
#this part will execute if the session was started
else{

	  	header('location: http://localhost/learn.php/log%20in%20page/homepage.php');
}
?>
</body>
</html>