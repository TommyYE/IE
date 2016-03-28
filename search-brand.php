<?php

        include('connectMySQL.php');
        $result = mysqli_query($con,"SELECT Brand FROM Cigarette")
        	 or die('Error connecting to mysql: ' . mysqli_error($con));
                //or die(mysql_error()); 

$result = mysqli_query($con,$query);
 //or die(mysql_error()); 

$row = mysqli_fetch_array($result);

 if($row)
 {
 $Brand = $row['Brand'];
 //renderForm($Brand);
 }
 else
 {
 echo "No results!";
 }
 
?>