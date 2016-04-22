<?php
	include('connectMySQL.php');
  $id = $_POST['qty'];
	$backValue = array();
 	
  		$sql = "SELECT * FROM Negative_Fact where Fact_ID = $id";
  		$result = mysqli_query($con,$sql);
  		$row = mysqli_fetch_array($result);
  		if($row)
  		{
        $All_courses_m = $row['All_courses_m'];
        $All_courses_f = $row['All_courses_f'];
        $heart_m = $row['heart_m'];
        $heart_f = $row['heart_f'];
        $lung_m = $row['lung_m'];
        $lung_f = $row['lung_f'];
        $life = $row['life_expectancy'];
  			$backValue[0] = $All_courses_m;
  			$backValue[1] = $heart_m;
  			$backValue[2] = $lung_m;
        $backValue[3] = $All_courses_f;
        $backValue[4] = $heart_f;
        $backValue[5] = $lung_f;
        $backValue[6] = $life;
//   			echo "Tar = ".$Tar.", NCT = ".$Nicotine.", CO = ".$CO;
			echo json_encode($backValue);
  		}else
  		{
  			echo "No result!";
  		}
            		
?>