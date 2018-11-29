<?php 

	
	////Get Previous 10 month list Using PHP Date Time Function

	$start    = new DateTime('10 months ago');
	$start->modify('first day of this month'); 
	$end      = new DateTime();
	$interval = new DateInterval('P1M');
	$period   = new DatePeriod($start, $interval, $end);

	foreach ($period as $dt) {
		echo $dt->format('F Y') . "<br>";
	}




	//Get Previous 10 month list Using Switch Loop
	$month = date('m');

	for ($i=0; $i < 10 ; $i++) { 
		
		

		switch ($month) {
			case 12:
				echo 'December';
				break;
			case 11:
				echo 'November';
				break;
			case 10:
				echo 'October';
				break;
			case 9:
				echo 'September';
				break;
			case 8:
				echo 'August';
				break;
			case 7:
				echo 'July';
				break;
			case 6:
				echo 'Jun';
				break;
			case 5:
				echo 'May';
				break;
			case 4:
				echo 'April';
				break;
			case 3:
				echo 'March';
				break;
			case 2:
				echo 'February';
				break;
			case 1:
				echo 'January';
				break;
			
			default:
				# code...
				break;
		}
		echo "<br>";
		$month--;
	}
 ?>