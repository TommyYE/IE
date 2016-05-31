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
        $sql = "select format(SUM(qty),2) AS Qty, event_date AS EventDate from Event where date_sub(curdate(), INTERVAL 6 DAY) <= date(event_date) and userName = '".$userName."' GROUP BY event_date";
        $result = mysqli_query($con,$sql);
        $sql = "select format(SUM(qty),0) AS Qty from Event where date_sub(curdate(), INTERVAL 6 DAY) <= date(event_date) and userName = '".$userName."'";
        $result_sumQty = mysqli_query($con,$sql);
        $qty_row = mysqli_fetch_array($result_sumQty);
        if($qty_row){
            $sumQty = $qty_row['Qty'];
        }else{
            echo "No result";
        }
        $i = 0;
        while($row=$result->fetch_object()) {
            $Qty[$i]=$row->Qty;
            $EventDate[$i]=$row->EventDate;
            $i++;
        }
        $result->free();
        $backValue[0] = $Qty;
        $backValue[1] = $EventDate; 
        $backValue[2] = $sumQty;
        echo json_encode($backValue);
    }

?>
