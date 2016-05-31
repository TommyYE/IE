<?php
    session_start();
    $goalId = $_POST['goalId'];
    $server = 'localhost';
    $user = 'root';
    $pass = '123456';
 	$db = 'IEc2';
    $userName = $_SESSION["usrname"];
    $con = mysqli_connect($server, $user, $pass, $db);
    $backValue = array();

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else
    {
        $sql = "DELETE FROM UserGoalInMoney WHERE goal_id_m = ".$goalId;
        mysqli_query($con,$sql);
        echo "Succeeded";
    }
?>