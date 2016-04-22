<?php
	session_start();
	$userName = $_POST['name'];
	$server = 'localhost';
 	$user = 'root';
 	$pass = '123456';
 	$db = 'IEc2';
 	$con = mysqli_connect($server, $user, $pass, $db);
	$backValue = array();
 	
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}else
  	{

		$sql = "SELECT * FROM Users WHERE userName = '".$userName."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		if($row){
			$_SESSION["usrname"] = $userName;
			echo "succeed";
			
		}else{
			echo "exist";
		}

	}
            		
?>