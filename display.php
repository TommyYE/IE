<?php
    session_start();
    $brandName = $_POST['brand'];
    $qty = $_POST['qty'];
    $cost = $_POST['cost'];
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
        $sql = "SELECT Cigarette.Tar*SUM(qty) AS Tar, Cigarette.Nicotine*SUM(qty) AS Nicotine, Cigarette.CO*SUM(qty) AS CO, SUM(cost) AS Cost FROM Event LEFT JOIN Cigarette ON Event.Brand=Cigarette.Brand WHERE Event.userName=\"".$userName."\"";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        if($row)
        {
            $Tar = $row['Tar'];
            $Nicotine = $row['Nicotine'];
            $CO = $row['CO'];
            $Spend = $row['Cost'];
            if(is_null($Tar)){
                $Tar=0;
                $Nicotine=0;
                $CO=0;
                $Spend=0;
            }
            $backValue[0] = $Tar;
            $backValue[1] = $Nicotine;
            $backValue[2] = $CO;
            $backValue[3] = $Spend;
            echo json_encode($backValue);
        }
    }

?>