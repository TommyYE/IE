<?php

        include('connectMySQL.php');

$tag1 = $_REQUEST["brandList"];
$tag2 = $_REQUEST["number"];

//$query = "select * from Cigarette WHERE brand='".$tag1."';


$query = "SELECT * FROM Cigarette WHERE brand ='".$tag1."'";


//$brand = $_REQUEST['brand'];

$result = mysqli_query($con,$query);
 //or die(mysql_error()); 

$row = mysqli_fetch_array($result);

 if($row)
 {
 
 $Weight = $row['Weight'];
 $Tar = $row['Tar'];
 $Nicotine = $row['Nicotine'];
 $CO = $row['CO'];
 
 //renderForm($Weight, $Tar, $Nicotine, $CO);
 }
 else
 {
 echo "No results!";
 }
 
?>


<table border="2" align="center" bgcolor="" width="600" height="100">

<tr>
<td>Tar (mg/cig)</td>
	<td>
	<?php 
		$Tar = floatval($Tar) * floatval($tag2);
		echo $Tar;
	?>
	</td>
</tr>
<tr>
<td>Nicotine (mg/cig)</td>			
	<td>
	<?php 
		$Nicotine = floatval($Nicotine) * floatval($tag2);
		echo $Nicotine;
	?>
	</td>
</tr>
<tr>
<td>Carbon Monoxide (mg/cig)</td>
	<td>
	<?php 
		$CO = floatval($CO) * floatval($tag2);
		echo $CO;
	?>
	</td>

</tr>

</table>
