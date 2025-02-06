<?php
	session_start();
	if(!isset($_SESSION["aid"])){
		header("Location: admin_home.php");
		return;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Event</title>
<link rel="stylesheet" href="admin_home.css"/>
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
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="complaints.php">Complaints</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>			    
			<li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="userMessages.php">User Messages</a></li>		    
		    
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="admin_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  
<?php include "db_config.php"?>


	  
	  <form method="post" action="cheking_addworker.php">
	  <table>
	  <tr>
	  	<td colspan=2 align="center"><b>Add Worker</b></td>
	  </tr>
	  
	  <tr>
	  	<td><b> Name:</b></td>
	  	<td><input type="text" name="name" required></td>
	  </tr>
	  <tr>
	  	<td><b>Email:</b></td>
	  	<td><input type="text" name="email" required></td>
	  </tr>
	  <tr>
	  	<td><b>Mobile:</b></td>
	  	<td><input type="text" name="mobile"  required></td>
	  </tr>
	  <tr>
	  	<td><b>Address:</b></td>
	  	<td><input type="text" name="add" required></td>
	  </tr>
      <tr>
	  	<td><b>Adhar No:</b></td>
	  	<td><input type="text" name="adhar" required></td>
	  </tr>
	  
	  <tr>
	  	<td><input type="submit" value="Save" class="btn"></td>
	  	<td><input type="reset" value="Clear" class="btn"></td>
	  </tr>
	  
	  </table>
	  
	  </form>
	  
	  </main>
	  
	</div>
</body>
</html>