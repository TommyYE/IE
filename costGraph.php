<?php
    session_start();
    $brandName = $_POST['names'];
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
        $sql = "select format(SUM(cost),2) AS Cost, event_date AS EventDate from Event where date_sub(curdate(), INTERVAL 6 DAY) <= date(event_date) and userName = '".$userName."' GROUP BY event_date";
        $result = mysqli_query($con,$sql);
        $sql = "select format(SUM(cost),2) AS Cost from Event where date_sub(curdate(), INTERVAL 6 DAY) <= date(event_date) and userName = '".$userName."'";
        $result_sumCost = mysqli_query($con,$sql);
        $cost_row = mysqli_fetch_array($result_sumCost);
        if($cost_row){
            $sumCost = $cost_row['Cost'];
            if(is_null($sumCost)){
                $sumCost=0;
            }
        }else{
            echo "No result";
        }
        $i = 0;
            while($row=$result->fetch_object()) {
                $Cost[$i]=$row->Cost;
                $EventDate[$i]=$row->EventDate;
                $i++;
            }
            $result->free();
            $backValue[0] = $Cost;
            $backValue[1] = $EventDate;
            $backValue[2] = $sumCost;
            echo json_encode($backValue);
    }

?>
