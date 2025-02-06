<?php
	session_start();
	if(!isset($_SESSION["aid"])){
		header("Location: index.php");
		return;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Users List</title>
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
	  	<div>Welcome Admin - <span style="color:yellow;"><?=$_SESSION["uname"]?></span></div>
	  </header>
	  <aside class="sidenav">
	    <ul class="sidenav__list">
	    	<li class="sidenav__list-item"><i class="fa fa-home"></i> <a href="admin_home.php">Home</a></li>
			<li class="sidenav__list-item"><i class="fa fa-tasks" aria-hidden="true"></i><a href="event.php">Events</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-users" aria-hidden="true"></i><a href="view_user.php">View Users</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-user" aria-hidden="true"></i> <a href="employee.php">Workers</a> </li>
		    <li class="sidenav__list-item"><i class="fa fa-money"></i> <a href="bill.php">Bills</a></li>
	
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="userMessages.php">User Messages</a></li>		    

		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="admin_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
<?php include "db_config.php"?>
<?php
	$rs = mysqli_query($con, "select user_id,user_name,email_id,mobile_no from user order by user_id");
?>

	  <div class="container">
	  <h2>Users List</h2>
	<table id="tableID" style="width:100%" class="table table-striped sampleTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		
	</tr>
	</thead>
	<tbody>
<?php
	while($row = mysqli_fetch_row($rs)){
?>
	<tr>
		<td ><?=$row[0]?></td>
		<td><?=$row[1]?></td>
		<td><?=$row[2]?></td>
		<td><?=$row[3]?></td>
		
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