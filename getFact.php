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
        $sql = "select Tar, Nicotine, CO from Fact";
        $result = mysqli_query($con,$sql);
        $i = 0;
        while($row=$result->fetch_object()) {
            $Tar[$i]=$row->Tar;
            $Nicotine[$i]=$row->Nicotine;
            $CO[$i]=$row->CO;
            $i++;
        }
        $result->free();
        $backValue[0] = $Tar;
        $backValue[1] = $Nicotine;
        $backValue[2] = $CO;
        $backValue[3] = $i;
        echo json_encode($backValue);
    }

?>
