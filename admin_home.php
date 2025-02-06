<?php
	session_start();

	if(!isset($_SESSION['aid'])){
		header("Location: admin_home.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
<link rel="stylesheet" href="admin_home.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="grid-container">
	  <header class="header">
	  	<div>Welcome Admin - <span style="color:yellow;"><?=$_SESSION["uname"]?></span></div>
	  </header>
	  <aside class="sidenav">
	    <ul class="sidenav__list"  style="background-color: #394263;">
			<h1></h1>
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
	  
	  <main class="main" >
	  <img src="admin.jpg" style="padding: 20px; height:450px ; width:1000px"/>
	  </main>
	  <footer class="footer">
   	    <div><?=date('Y')?> - Event Management System</div>
	  </footer>

</body>
</html>