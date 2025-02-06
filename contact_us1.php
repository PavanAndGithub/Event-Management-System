<?php include "db_config.php"?>

<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile_no"];
	$messege=$_POST["messege"];
?>



<?php
	
	
		mysqli_query($con, "insert into contact_us(name, mobile_no, email_id, message) values('$name','$mobile','$email','$messege')");
?>
<script>
	alert("Thank you for contact us.We will contact you soon");
	location.href = "index.php";
</script>
<?php

?>