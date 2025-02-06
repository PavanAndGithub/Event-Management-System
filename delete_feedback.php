<?php include "db_config.php"?>

<?php
	$id = $_GET["con_id"];
	
	mysqli_query($con, "delete from contact_us where con_id=$id");
	
	header("Location: userMessages.php");
?>