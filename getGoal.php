<?php
	include('connectMySQL.php');
	$username = $_POST['username'];
	$package = ;
	
	$sql = "SELECT GoalName, Money FROM UserGoal WHERE username = '".$username."'";
	$result = mysqli_query($con,$sql);
  	$row = mysqli_fetch_array($result);
  	if ($row) {
		$GoalName = $row['GoalName'];
		$Money = $row['Money'];
		echo json_encode()
	}
?>