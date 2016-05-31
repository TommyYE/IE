<?php
    session_start();
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
        $sql = "select requester, responer, status from ChallengeEvent where requester = '".$userName."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        if($row){
            $status = $row['status'];
            if($status == 0){
                $backValue[0] = "Qholding";
                $backValue[1] = $row['responer'];
            }else{
                $backValue[0] = "Qongoing";
                $backValue[1] = $row['responer'];
            }
        }else{
            $sql = "select requester, responer, status from ChallengeEvent where responer = '".$userName."'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            if($row){
                $status = $row['status'];
                if($status == 0){
                    $backValue[0] = "Pholding";
                    $backValue[1] = $row['requester'];
                }else{
                    $backValue[0] = "Pongoing";
                    $backValue[1] = $row['requester'];
                }
            }else{
                $backValue[0] = "NoEvent";
            }
        }
        //$backValue[3] = $userName;
        echo json_encode($backValue);
        //echo "fail";
    }

?>
