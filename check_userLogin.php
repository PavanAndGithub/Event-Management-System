<?php session_start()?>
<?php include "db_config.php"?>

<?php
	$email = $_POST["email"];
	$pass = $_POST["password"];
	
	$rs = mysqli_query($con, "select * from user where email_id='$email' and password='$pass'");
	
	if($row = mysqli_fetch_row($rs)){
		$_SESSION["cid"] = $row[0];;
		$_SESSION["name"] = $row[1];
?>
<script>
	alert('User Login Successful!!!');
	location.href = 'user_home.php';
</script>
<?php
	}
	else{
?>
<script>
	alert('User Login Failed!!!');
	location.href = 'user_login.php';
</script>
<?php
	}
?>