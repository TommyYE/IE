<?php
$user = 'root';
$password = 'root';
$db = 'Test';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
if (mysqli_connect_errno($success))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else { echo "Connection was OK!\n";}

?>