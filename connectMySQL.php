<?php
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'IE';
 
 // Connect to Database
 $con = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
?>