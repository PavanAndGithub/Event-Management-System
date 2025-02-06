<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="check_userLogin.php" method="post">
     	<h2>User Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email Id</label>
     	<input type="text" name="email" placeholder="email id" required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit">Login</button>
          <a href="user_registration.php" class="ca">Create an account</a>
     </form>
</body>
</html>