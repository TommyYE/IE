<?php
include('connectMySQL.php');
$brandquery = "SELECT Brand FROM Cigarette";
$brandresult -> $mysqli->query($brandquery);

while ($row = mysqli_fetch_array($brandresult, MYSQL_ASSOC)) {
	$brand[] = array(
	'brand' => $row['Brand']
	);
}
echo jason_encode($brand);

$detailsquery = "SELECT Tar, Nicotine, CO FROM Cigarette where ";
?>