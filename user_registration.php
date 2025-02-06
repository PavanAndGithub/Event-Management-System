<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
     <form action="check_userRegistration.php" method="post">
     	<h2>User Registrtaion</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

         <label>Full Name:</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Enter Full Name" required
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name"  required
                      placeholder="Enter Full Name"><br>
          <?php }?>

          <label>Email ID:</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" required
                      placeholder="Email ID"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" required
                      placeholder="Email ID"><br>
          <?php }?>
          <label>Mobile No:</label>
          <?php if (isset($_GET['mobile_no'])) { ?>
               <input type="text" 
                      name="mobile_no" required
                      placeholder="Mobile No"
                      value="<?php echo $_GET['mobile_no']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mobile_no" required
                      placeholder="Mobile No"><br>
          <?php }?>
          
     	<label>Password:</label>
     	<input type="password" required
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password:</label>
          <input type="password" 
                 name="re_password" required
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          
          <a href="user_login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>