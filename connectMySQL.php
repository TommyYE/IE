<?php
$server = 'localhost';
 $user = 'root';
 $pass = '123456';
 $db = 'IEc2';
 
 // Connect to Database
 $con = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
?>