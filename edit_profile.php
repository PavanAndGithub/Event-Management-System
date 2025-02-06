<?php include "db_config.php"?>

<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile_no"];
	$pass = $_POST["password"];
	$re_pass=$_POST["re_password"];
	
	$rs = mysqli_query($con, "select * from user where email_id='$email' and user_id<>$id");
	
	if(mysqli_num_rows($rs)>0){
?>
<script>
	alert("Email already registered");
	location.href = "view-profile.php";
</script>
<?php
	}
	else{
		mysqli_query($con,"update user set user_name='$name', email_id='$email',  mobile_no='$mobile', password='$pass', re_pass='$re_pass' where user_id=$id");
?>
<script>
	alert("User profile updated successfully");
	location.href = "user_home.php";
</script>
<?php
	}
?>

