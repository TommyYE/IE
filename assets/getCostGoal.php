<?php
    session_start();
    $name = $_POST['name'];
    $server = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db = 'Test';
    $userName = $_SESSION["usrname"];
    $con = mysqli_connect($server, $user, $pass, $db);
    $backValue = array();

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else
    {
        $sql = "select goal_name_m AS GoalName, goal_price_m AS GoalPrice from UserGoalInMoney where userName = '".$userName."'";
        $result = mysqli_query($con,$sql);
        $i = 0;
        while($row=$result->fetch_object()) {
            $goalName[$i]=$row->GoalName;
            $goalPrice[$i]=$row->GoalPrice;
            $i++;
        }
        $result->free();
        $backValue[0] = $goalName;
        $backValue[1] = $goalPrice;
        $backValue[2] = $i;
        echo json_encode($backValue);
    }
?>