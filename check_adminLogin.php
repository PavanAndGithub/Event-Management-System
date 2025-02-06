<?php session_start()?>
<?php include "db_connection.php"?>

<?php
	$uname = $_POST["uname"];
	$psw = $_POST["password"];
	
	$rs = mysqli_query($conn, "select * from admin where admin_id='$uname' and admin_pwd='$psw'");
	
	if($row = mysqli_fetch_row($rs)){
		$_SESSION["aid"] = $row[0];
		$_SESSION["uname"] = $row[2];
?>
<script>
	alert('Admin Login Successful!!!');
	location.href = 'admin_home.php';
	
</script>
<?php
	}
	else{
?>
<script>
	alert('Admin Login Failed!!!');
	location.href = 'admin_login.php';
</script>
<?php
	}
?>