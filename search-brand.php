<?php
$link = mysqli_connect("localhost", "root", "root", "Test");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT Brand FROM Cigarette")) {
	    print_r($result);

    /* free result set */
    mysqli_free_result($result);
}

 
?>