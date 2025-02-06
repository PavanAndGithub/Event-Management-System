<?php include "db_config.php"?>

<?php
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile =$_POST["mobile"];
	$address = $_POST["add"];
	$adhar_no = $_POST["adhar"];
	
	mysqli_query($con, "update worker set worker_name='$name', email='$email', mobile_no='$mobile', Address='$address', Adhar_no='$adhar_no'");
?>
<script>
	alert('Worker details update successfully');
	location.href = 'employee.php';
</script>

