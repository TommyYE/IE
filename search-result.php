<?php

        include('connectMySQL.php');
        


        
        $result = mysqli_query($con,"SELECT Weight, Tar, Nicotine, CO FROM Cigarette")
        	 or die('Error connecting to mysql: ' . mysqli_error($con));
                //or die(mysql_error()); 




$tag1 = $_REQUEST["myList"];


$tag2 = $_REQUEST["tag2"];


$tag3 = $_REQUEST["tag3"];

//$query = "select * from Cigarette WHERE brand='".$tag1."';


$query = "SELECT * FROM Cigarette WHERE";
if($tag1!=""){$query=$query." brand='".$tag1."'";}


//$id = $_REQUEST['id'];




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
	<td>Weight (mg)</td>
	<td>
	<?php 
		echo $Weight;
	?>
	</td>
</tr>
<tr>
<td>Tar (mg/cig)</td>
	<td>
	<?php 
		echo $Tar;
	?>
	</td>
</tr>
<tr>
<td>Nicotine (mg/cig)</td>			
	<td>
	<?php 
		echo $Nicotine;
	?>
	</td>
</tr>
<tr>
<td>Carbon Monoxide (mg/cig)</td>
	<td>
	<?php 
		echo $CO;
	?>
	</td>

</tr>

</table>