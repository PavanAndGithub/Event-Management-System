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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
		    
		    <li class="sidenav__list-item"><i class="fa fa-files-o"></i><a href="my_bookings.php">My Booking</a></li>
		    
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i><a href="user_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  	<img src="event6.avif" style="padding: 20px; height:450px ; width:1000px"/>
		 
		  
		  
	  </main>
	  <footer class="footer">
   	    <div> <?=date('Y')?> - Event Management System</div>
	  </footer>
	</div>
</body>
</html>