<?php include "db_config.php"?>

<?php
	$id = $_GET["worker_id"];
	
	mysqli_query($con, "delete from worker where worker_id=$id");
	

?>
<script>
	alert('Delted');
	location.href = 'employee.php';
</script>
