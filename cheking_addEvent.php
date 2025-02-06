<?php include "db_config.php"?>

<?php
	
	$name = $_POST["name"];
	$discription = $_POST["dis"];
	$date =$_POST["date"];
	$rate = $_POST["rate"];
	$venue = $_POST["venue"];
	
	mysqli_query($con, "insert into events (event_name, event_discription, event_date, rate, venue) VALUES('$name','$discription', '$date', '$rate', '$venue')");
?>
<script>
	alert('Event added successfully');
	location.href = 'event.php';
</script>

