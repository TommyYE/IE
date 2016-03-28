<?php
$server='localhost';
$user='root';
$pass='123456'
$db='test';

//Conect to database
$conn=mysqli_connect($server,$user,$pass,$db);
if (mysqli_connect_errno($conn)) {
	echo "Fail to connect: ".mysqli_connect_error();
} else {
	echo "Connection ok.\n"
}
?>