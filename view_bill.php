<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Recipt</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
<?php include "db_config.php"?>

<?php
	$bid = $_GET["bid"];
	
	$rs = mysqli_query($con, "select  bill_id, bill_date,user_name,mobile_no, email_id, event_name, rate,event_date,  status from bill, user, events where bill.user_id = user.user_id and bill.event_id = events.event_id and bill_id=$bid");
    $row = mysqli_fetch_assoc($rs);
?>


    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Event Management System</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Bill No.: <?=$row["bill_id"]?></h2>
                    <p class="sub-heading">Bill Date: <?=$row["bill_date"]?></p>
                    <p class="sub-heading">System Address:  ems2024@gmail.com </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: <?=$row["event_name"]?> </p>
                    
                    <p class="sub-heading">Mobile Number:  <?=$row["mobile_no"]?></p>
                    <p class="sub-heading">Email:  <?=$row["email_id"]?></p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Book Event Details</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Event</th>
                        <th class="w-20">Rate</th>
                        <th class="w-20">Date</th>
                        <th class="w-20"> Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$row["event_name"]?></td>
                        <td><?=$row["rate"]?></td>
                        <td><?=$row["event_date"]?></td>
                        <td><?=$row["rate"]?></td>
                    </tr>
                    
                </tbody>
            </table>
            <br>
            <h3 class="heading">Confirmation  Status: <?=$row["status"]?></h3>
            <h3 class="heading">Payment Mode: Debit/Credit Card</h3>
        </div>
        <center><button align="center" onclick="window.print()" style="margin:10px;">Print</button></center>
        <a href="user_home.php"><input type="button" value="Home"></a>
        
    </div>      
</body>
</html>