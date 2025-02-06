<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index page</title>
  <style>
    *{ 
       padding: 0;
       margin: 0;
       box-sizing: border-box;
     }
     header{
      width: 100%;
      height: 100vh;
      background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url("https://static.vecteezy.com/system/resources/thumbnails/034/040/348/small_2x/rock-concert-silhouettes-of-people-in-the-bright-rays-of-spotlights-generated-by-artificial-intelligence-photo.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      font-family: sans-serif;
      
    }
nav
    {
        width: 100%;
       height: 100px;
      
      color: white;
      display: flex;
      justify-content: space-around;
      align-items: center;

    }
    .logo{
        font-size: 30px;
        letter-spacing: 0px;
        
    }
    .menubar a{
        text-decoration: none;
        color: rgb(217, 211, 211);
        padding: 10px 20px;
        font-size: 15px;
    }
    .menubar a:hover{
        background-color: rgb(65, 162, 232);
        border-radius: 6px;
    }
    .reg a{
        text-decoration: none;
        color: rgb(74, 24, 24);
        padding: 10px 20px;
        font-size: 15px;
        background: indianred;
        border-radius: 8px;
    }
    .text{
        max-width: 650px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: white;
        text-align: center;
    }
    .text span{
        letter-spacing: 2px;
        font-size: 20px;
        color: rgb(230, 235, 235);
    }
    .text h1{
        font-size: 40px;
        color: aquamarine;
        
    }
    .text a{
        text-decoration: none;
        background: rgb(229, 133, 59);
        padding: 10px 20px;
        color: rgb(10, 9, 9);
        letter-spacing: 2px;
        border-radius: 8px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
    <div class="logo">
        Event Management
        <br> System
    </div>
    <div class="menubar">
        <a href="index.php">Home</a>
        
        <a href="admin_login.php">Admin</a>
        <a href="homeEvents.php">Events</a>
        <a href="contact_us.php">Contact us</a>
        <a href="about.html">About</a>
    </div>
    <div class="reg">
        <a href="user_registration.php">Register</a>
    </div>
    </nav>
    <section class="text">
        <span>
            Welcome to our website
        </span>
        <h1>Event Management System</h1>
        <br>
        <a href="user_login.php">Book Event</a>
        
    </section>
    
  </header>
</body>
</html>