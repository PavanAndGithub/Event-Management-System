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
<title>user Home</title>
<link rel="stylesheet" href="admin_home.css"/>
<link rel="stylesheet" href="user_registration.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="grid-container">
	  <header class="header">
	  	<div>Welcome user - <span style="color:yellow;"><?=$_SESSION["name"]?></span></div>
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
	  <main class="main" style="height: 800px;">
<?php include "db_config.php"?>
<?php
	$cid = $_SESSION["cid"];
	$rs = mysqli_query($con, "select * from user where user_id=$cid");
	$row = mysqli_fetch_row($rs);
?>	  
	  	<form action="edit_profile.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Edit Your Profile</h1>
    <hr>
    <label for="id"><b>ID</b></label>
    <input type="text" name="id" value="<?=$row[0]?>" readonly>

    <label for="email"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" value="<?=$row[1]?>" required>

    <label for="psw"><b>Email Id</b></label>
    <input type="text" placeholder="Enter Email Id" name="email" value="<?=$row[2]?>" required>

    <label for="name"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="mobile_no" value="<?=$row[3]?>" required>

    <label for="addr"><b>Password</b></label>
    <input type="text" placeholder="Enter password" name="password" value="<?=$row[4]?>" required>

    <label for="phone"><b>Re Password</b></label>
    <input type="text" placeholder="Enter password again" name="re_pass" value="<?=$row[5]?>">

    
    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="location.href='user_home.php'">Cancel</button>
      <button type="submit" class="signupbtn">Update</button>
    </div>
  </div>
</form>
	  	
	  	
	  </main>
	  <footer class="footer">
   	    <div> <?=date('Y')?> - Event Management System</div>
	  </footer>
	</div>
</body>
</html>