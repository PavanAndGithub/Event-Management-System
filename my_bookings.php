<?php
	session_start();
	if(!isset($_SESSION["cid"])){
		header("Location: index.php");
		return;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>User Home</title>
<link rel="stylesheet" href="admin_home.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.btn{
	text-decoration:none;
	padding: 5px;
	background: black;
	color: white;
	border-radius: 5px;
}
</style>
</head>
<body>
	<div class="grid-container">
	  <header class="header">
	  	<div>Welcome User - <span style="color:yellow;"><?=$_SESSION["name"]?></span></div>
	  </header>
	  <aside class="sidenav">
	    <ul class="sidenav__list">
	    	<li class="sidenav__list-item"><i class="fa fa-home"></i> <a href="user_home.php">Home</a></li>
			<li class="sidenav__list-item"><i class="fa fa-user"></i> <a href="view_profile.php">View Profile</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-tasks"></i><a href="view_events.php">View Events</a></li>
		   
		    <li class="sidenav__list-item"><i class="fa fa-files-o"></i><a href="my_bookings.php">My Bookings</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i><a href="user_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  	
	  	<?php include "db_config.php"?>
<?php
	$cid = $_SESSION["cid"];
	$rs = mysqli_query($con, "select bill_id, bill_date, event_name, rate, status from events, bill where bill.event_id = events.event_id and user_id=$cid order by bill_id");
?>

	  <div class="container">
	  <h2>My Events List</h2>
	<table id="tableID" style="width:100%" class="table table-striped sampleTable">
	<thead>
	<tr>
		<th>Bill ID</th>
		<th>Bill Date</th>
		<th>Event Name</th>
		<th>Rate</th>
		<th>Status</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
<?php
	while($row = mysqli_fetch_row($rs)){
?>
	<tr>
		<th><?=$row[0]?></th>
		<th><?=$row[1]?></th>
		<th><?=$row[2]?></th>
		<th><?=$row[3]?></th>
		<th><?=$row[4]?></th>
		<th><a href="view_bill.php?bid=<?=$row[0]?>" class="btn" title="View Bill"><i class="fa fa-eye">View Bill</a></th>
	</tr>
<?php
	}
?>	
	</tbody>	
	</table>
</div>
	  
	  <script>
	$(document).ready(function() {
		$('#tableID').DataTable({ });
	});
</script>
	  	
	  	
</main>
<footer class="footer">
   	    <div> <?=date('Y')?> - Event Management System</div>
	  </footer> 
	</div>
	
</body>
</html>