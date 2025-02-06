<?php include "db_config.php"?>

<?php
	$name = $_POST["name"];
	$discription = $_POST["dis"];
	$date =$_POST["date"];
	$rate = $_POST["rate"];
	$venue = $_POST["venue"];
	
	mysqli_query($con, "update events set event_name='$name', event_discription='$discription', event_date='$date', rate='$rate', venue='$venue'");
?>
<script>
	alert('event updated successfully');
	location.href = 'event.php';
</script>