<?php
    session_start();
    $responer = $_POST['name'];
    $competitor = $_POST['name'];
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
        $sql = "select format(SUM(qty),0) AS Qty, event_date AS EventDate from Event where userName = '".$userName."' GROUP BY event_date";
        $result_user = mysqli_query($con,$sql);
        $sql = "select format(SUM(qty),0) AS Qty, event_date AS EventDate from Event where userName = '".$responer."' GROUP BY event_date";
        $result_competitor = mysqli_query($con,$sql);
        $u = 0;
        $c = 0;
        $u_sumQty = 0;
        $c_sumQty = 0;
            while($u_row=$result_user->fetch_object()) {
                $u_sumQty+=$u_row->Qty;
                $u++;
            }
            while($c_row=$result_competitor->fetch_object()) {
                $c_sumQty+=$c_row->Qty;
                $c++;
            }

        $result_user->free();
        $result_competitor->free();
        $backValue[0] = $u;
        $backValue[1] = $u_sumQty;
        $backValue[2] = $c;
        $backValue[3] = $c_sumQty;
        $backValue[4] = $userName;
        echo json_encode($backValue);
        //echo "fail";
    }

?>
