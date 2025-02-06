<?php session_start()?>
<?php include "db_config.php"?>

<?php
	$cid = $_SESSION["cid"];
	$pid = $_POST["pid"];
	
	$cardholder = $_POST["cardholder"];
	$cardno = $_POST["cardno"];
	mysqli_query($con, "insert into bill(bill_date, user_id, event_id, card_holder, card_number) values(current_date, '$cid',' $pid', '$cardholder', '$cardno')");	
?>
<script>
	alert('Payment accepted successfully.You will get confirmation massege very soon.');
	location.href = 'user_home.php';
</script>