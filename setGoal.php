<!DOCTYPE html>
<?php
	include('connectMySQL.php');
?>
<html>
	<head>
	</head>
	<body>
	<section id = "display-goal">

	</section>
	
	<section id = "add-goal">
		<h3>The Goal for smoking</h3>
		<p>Goal name</p>
		<input type = "text" name = "goalNameInput" id = "goalNameInput" />
		
		<p>Target Cost</p>
		<input type = "text" name = "goalTargetInput" id = "goalTarInput" />
		
		<button type="button" class="btn btn-theme03 btn-primary btn-lg btn-block" onclick="clickButtom()"><i class="fa fa-check"></i> Submit</button>		
	</section>
		
	</body>
</html>