<?php include "db_config.php"?>

<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile_no"];
	$pass = $_POST["password"];
	$re_pass = $_POST["re_password"];
	
	
	$rs = mysqli_query($con, "select * from user where email_id='$email'");
	
	if(mysqli_num_rows($rs)>0){
?>
<script>
	alert("Email already registered");
	location.href = "user_login.php";
</script>
<?php
	}
	else{
		mysqli_query($con, "insert into user(user_name, email_id, mobile_no, password, re_pass) values('$name','$email','$mobile','$pass','$re_pass')");
?>
<script>
	alert("User registered successfully");
	location.href = "user_login.php";
</script>
<?php
	}
?>