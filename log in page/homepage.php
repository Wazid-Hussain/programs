
<?php
	
	#starting the session
	session_start();

	#check if the session is start or not 
	if(!isset($_SESSION['id'])){
		header('location: http://localhost/learn.php/log%20in%20page/log_in.php');
	}

	#This part will be for stoping the session
	if(isset($_POST['logout'])){
		session_destroy();
		header('location: http://localhost/learn.php/log%20in%20page/log_in.php');
	}
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="main">
		<form method="POST" action="">
			<button type="submit" name="logout"> LOG OUT </button>
		</form>
	</div>

</body>
</html>