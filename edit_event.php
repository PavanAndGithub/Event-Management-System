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
<title>Edit Plan</title>
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
	    	<li class="sidenav__list-item"><i class="fa fa-home"></i> <a href="admin-home.php">Home</a></li>
			<li class="sidenav__list-item"><i class="fa fa-tasks" aria-hidden="true"></i>
<a href="event.php">Events</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-users" aria-hidden="true"></i>
 <a href="customer.php">Customer</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-user" aria-hidden="true"></i> <a href="employee.php">Employees</a> </li>
		    <li class="sidenav__list-item"><i class="fa fa-money"></i> <a href="bill.php">Bills</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="complaints.php">Complaints</a></li>
		    <li class="sidenav__list-item"><i class="fa fa-comments" aria-hidden="true"></i> <a href="faqs.php">FAQs</a></li>		    <li class="sidenav__list-item"><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="feedback.php">Feedback</a></li>		    
			    
		    <li class="sidenav__list-item"><i class="fa fa-sign-out"></i> <a href="admin_logout.php">Logout</a></li>
  		</ul>
	  
	  </aside>
	  <main class="main">
	  
<?php include "db_config.php"?>

<?php
	$id = $_GET["event_id"];
	$rs = mysqli_query($con, "select * from events where event_id=$id");
	$row = mysqli_fetch_row($rs);
?>
	  
      <form method="post" action="check_editEvent.php">
	  <table>
	  <tr>
	  	<td colspan=2 align="center"><b>Add Event</b></td>
	  </tr>
	  
	  <tr>
	  	<td><b>Event Name:</b></td>
	  	<td><input type="text" name="name" value="<?=$row[1]?>" required></td>
	  </tr>
	  <tr>
	  	<td><b>Discription:</b></td>
	  	<td><input type="text" name="dis" value="<?=$row[2]?>" required></td>
	  </tr>
	  <tr>
	  	<td><b>Date:</b></td>
	  	<td><input type="text" name="date" value="<?=$row[3]?>" required></td>
	  </tr>
	  <tr>
	  	<td><b>Rate:</b></td>
	  	<td><input type="text" name="rate" value="<?=$row[4]?>" required></td>
	  </tr>
      <tr>
	  	<td><b>Venue:</b></td>
	  	<td><input type="text" name="venue" value="<?=$row[5]?>" required></td>
	  </tr>
	  
	  <tr>
	  	<td><input type="submit" value="Update" class="btn"></td>
	  	<td><input type="reset" value="Clear" class="btn"></td>
	  </tr>
	  
	  </table>
	  
	  </form>
	  
	  </main>
	  
	</div>
</body>
</html>