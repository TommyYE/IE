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
  		$sql = "SELECT Tar, Nicotine, CO FROM Cigarette WHERE brand ='".$brandName."'";
  		$result = mysqli_query($con,$sql);
  		$row = mysqli_fetch_array($result);
  		if($row)
  		{
  			$Tar = $row['Tar'];
  			$Nicotine = $row['Nicotine'];
  			$CO = $row['CO'];
  			$backValue[0] = $Tar;
  			$backValue[1] = $Nicotine;
  			$backValue[2] = $CO;
//   			echo "Tar = ".$Tar.", NCT = ".$Nicotine.", CO = ".$CO;
			echo json_encode($backValue);
  		}else
  		{
  			echo "No result!";
  		}
  	}
            		
?>