<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="contact_us.css">
    
</head>
<body>
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="con-wrapper">
               <div class="con-form">
                <h3>Send us messege</h3>
                <form method="POST"  action="contact_us1.php" >
                    <div class="form-grp">
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-grp">
                        <input type="text" name="mobile_no" placeholder="Enter your mobile number" required>
                    </div>
                    <div class="form-grp">
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="form-grp">
                        <input type="text" name="messege" placeholder="Type your messege here" required>
                    </div>
                    <div class="">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
               </div>
               <div class="con-info">
                <h3>Contact Information</h3>
                <p><i class="fa fa-phone"></i>+91 89345672334 </p>
                <p><i class="fa fa-envelope"></i>ems2024@gmail.com</p>
                <p><i class="fa fa-map-marker-alt"></i>123 street ,jay nagar ,pune</p>
               </div>
            </div>
        </div>
    </section>
</body>
</html>