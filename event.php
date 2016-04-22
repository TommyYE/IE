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

        $sql = "INSERT INTO Event(event_date, qty, cost, Brand, userName) VALUES (now(),".$qty.",".$cost.",\"".$brandName."\",\"".$userName."\")";
        mysqli_query($con,$sql);
        $sql = "SELECT Cigarette.Tar*SUM(qty) AS Tar, Cigarette.Nicotine*SUM(qty) AS Nicotine, Cigarette.CO*SUM(qty) AS CO, SUM(cost) AS Cost FROM Event LEFT JOIN Cigarette ON Event.Brand=Cigarette.Brand WHERE Event.userName=\"".$userName."\"";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        if($row)
        {
            $Tar = $row['Tar'];
            $Nicotine = $row['Nicotine'];
            $CO = $row['CO'];
            $Spend = $row['Cost'];
            $backValue[0] = $Tar;
            $backValue[1] = $Nicotine;
            $backValue[2] = $CO;
            $backValue[3] = $Spend;
    //   			echo "Tar = ".$Tar.", NCT = ".$Nicotine.", CO = ".$CO;
            echo json_encode($backValue);
        }else
        {
            echo "No result!";
        }
    }

?>