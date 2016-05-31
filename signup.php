<?php
    session_start();
    $userName = $_POST['name'];
    $userPwd = $_POST['pwd'];
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
        $encryptedPwd = crypt($userPwd, '$2a$07$usesomesillystringforsalt$');
        $sql = "SELECT * FROM Users WHERE userName = '".$userName."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        if($row){
            echo "existed";
        }else{
            if (filter_var($userName, FILTER_VALIDATE_EMAIL)){
                $sql = "INSERT INTO Users(userName, passWord, favBrand, favSize, favPrice) VALUES ('".$userName."','".$encryptedPwd."','0',0,0)";
                mysqli_query($con,$sql);
                $_SESSION["usrname"] = $userName;
                echo "succeeded";
            }else{
                echo "invalid";
            }

        }

    }

?>