<?php
    session_start();
    $name = $_POST['name'];
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
        $sql = "select goal_id_m AS GoalID, goal_name_m AS GoalName, goal_price_m AS GoalPrice from UserGoalInMoney where userName = '".$userName."'";
        $result = mysqli_query($con,$sql);
        $sql = "select format(SUM(cost),2) AS Cost from Event where userName = '".$userName."'";
        $result_sumCost = mysqli_query($con,$sql);
        $cost_row = mysqli_fetch_array($result_sumCost);
        if($cost_row){
            $sumCost = $cost_row['Cost'];
        }else{
            echo "No result";
        }
        $i = 0;
        while($row=$result->fetch_object()) {
            $goalId[$i]=$row->GoalID;
            $goalName[$i]=$row->GoalName;
            $goalPrice[$i]=$row->GoalPrice;
            $i++;
        }
        $result->free();
        $backValue[0] = $goalName;
        $backValue[1] = $goalPrice;
        $backValue[2] = $sumCost;
        $backValue[3] = $i;
        $backValue[4] = $goalId;
        echo json_encode($backValue);
    }
?>