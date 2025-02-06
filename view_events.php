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
<title>Customer Home</title>
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
		    <li class="sidenav__list-item"><i class="fa fa-tasks"></i><a href="view_events.php">View Event</a></li>
		   
		    <li class="sidenav__list-item"><i class="fa fa-files-o"></i><a href="my_bookings.php">My Booking</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i><a href="user_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  	
	  <?php include "db_config.php"?>
<?php
	$rs = mysqli_query($con, "select * from events order by event_id");
?>

	  <div class="container">
	  <h2>Event List</h2>
	<table id="tableID" style="width:100%" class="table table-striped sampleTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>Event Name</th>
		<th>Discription</th>
		<th>Date</th>
		<th>Rate</th>
		<th>Venue</th>
		<th></th>
	</tr>
	</thead>
	<tbody >
<?php
	while($row = mysqli_fetch_row($rs)){
?>
	<tr >
		<td><?=$row[0]?></td>
		<td><?=$row[1]?></td>
		<td><?=$row[2]?></td>
		<td><?=$row[3]?></td>
		<td><?=$row[4]?></td>
		<td><?=$row[5]?></td>
		<td><a href="checkout.php?pid=<?=$row[0]?>" class="btn">Book Event Pass</a></td>
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