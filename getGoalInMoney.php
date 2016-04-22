<?php
	include('connectMySQL.php');
	$username = $_POST['username'];
	
	$sql = "SELECT GoalName, Money, EndDate FROM UserGoalInMoney WHERE username = '".$username."'";
	$result = mysqli_query($con,$sql);
  	$row = mysqli_fetch_array($result);
  	if ($row) {
		$GoalName = $row['GoalName'];
		$Money = $row['Money'];
		$EndDate = $row['EndDate'];
		echo json_encode()
	}
?>