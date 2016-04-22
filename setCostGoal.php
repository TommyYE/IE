<?php
    session_start();
    $goalName = $_POST['goal'];
    $goalCost = $_POST['price'];
    $userName = $_SESSION["usrname"];
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
        $sql = "INSERT INTO UserGoalInMoney(goal_name_m, goal_price_m, userName) VALUES ('".$goalName."','".$goalCost."','".$userName."')";
        mysqli_query($con,$sql);
        $_SESSION["usrname"] = $userName;
        echo "Set Goal Succeeded.";
        
    
    }

?>