<?php
session_start();
$responer = $_POST['responer'];
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
    $sql = "INSERT INTO ChallengeEvent(requester, responer, status) VALUES ('".$userName."','".$responer."', 0)";
    $result_insertEvent = mysqli_query($con,$sql);
    if($result_insertEvent){
        echo "succeeded";
    }else{
        echo "failed";
    }

    //echo "fail";
}

?>
