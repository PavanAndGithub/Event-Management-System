<?php include "db_config.php"?>

<?php
	$id = $_GET["event_id"];
	
	mysqli_query($con, "delete from events where event_id=$id");
	
	header("Location: event.php");
?>