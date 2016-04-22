<?php
	$brandName = $_POST['name'];
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
			echo $brandName;
  	}
            		
?>