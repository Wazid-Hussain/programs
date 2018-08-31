<html>
	<head>
		<?php
			#include data base connection file
			include('databse_connect.php')
		?>
	</head>
	<body>
		<table border="1px solid #000">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Contact</th>
					<th>E-Mail</th>
				</tr>
			</thead>
				<?php
					$sql = "SELECT * FROM users";
					$run = mysqli_query($link , $sql);
					$result = mysqli_num_rows($run);

					if($result > 0){
						
					}
				?>
			<tbody>
				<td>1</td>
				<td>test</td>
				<td>987564123</td>
				<td>test@demo.com</td>
			</tbody>

		</table>
	</body>
<html>