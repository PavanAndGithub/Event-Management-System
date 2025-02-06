<?php include "db_config.php"?>

<?php
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile =$_POST["mobile"];
	$address = $_POST["add"];
	$adhar_no = $_POST["adhar"];
	
	mysqli_query($con, "insert into worker (worker_name, email, mobile_no, Address, Adhar_no) VALUES('$name','$email', '$mobile', '$address', '$adhar')");
?>
<script>
	alert('Worker added successfully');
	location.href = 'employee.php';
</script>

