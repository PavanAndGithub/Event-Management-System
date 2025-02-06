

<?php include "db_config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: aquamarine;
        }
        .d1{
        padding-top: 50px;
        padding-left: 550px;
        }
        .d2{
            width: 700px;
            height: 100%;
            position:absolute;
            padding-left: 300px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        
        }
        .btn{
            color:black;
            background-color:orange;
            border:5px black ;
            border-radius: 4px ;
        }
        .btn:hover{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="d1">
        <h1><u>Available Events</u></h1>
    </div>
    <?php
	$rs = mysqli_query($con, "select * from events order by event_id");
?>
    <div class="d2">
        <table id="tableID" style="width:100%" class="table table-striped sampleTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Event Name</th>
                <th>Discription</th>
                <th>Date</th>
                <th>Rate</th>
                <th>Venue</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
	while($row = mysqli_fetch_row($rs)){
?>
                <tr>
                    <td><?=$row[0]?></td>
                    <td><?=$row[1]?></td>
                    <td><?=$row[2]?></td>
                    <td><?=$row[3]?></td>
                    <td><?=$row[4]?></td>
                    <td><?=$row[5]?></td>
                    <td><a href="first_login.php?pid=<?=$row[0]?>" class=""><button class="btn">Book Event Pass</button></a></td>
                </tr>
<?php
	}
?>	
            </tbody>	
        </table>
    </div>
</body>
</html>