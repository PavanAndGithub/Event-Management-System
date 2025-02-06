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
  <title>Book event pass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="bookEvent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include "db_config.php"?>

<?php
	$id = $_GET["pid"];
	$rs = mysqli_query($con, "select * from events where event_id=$id");
  $row = mysqli_fetch_assoc($rs);
?>

  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          
        </div>
        <form method="post" action="check_payment.php">
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
            <p class="item-name">Event Name:<?=$row["event_name"]?></p>
              <p class="item-name">Rate:<?=$row["rate"]?></p>
              <p class="item-name">Event Date :<?=$row["event_date"]?>
              <p class="item-name">Rate :<?=$row["rate"]?>
              <p class="item-name">Venue :<?=$row["venue"]?>
            </div>

            <div class="total">Total amount to pay<span class="price">Rs.<?=$row["rate"]?></span></div>
          </div>
          <div class="card-details">
            <h1 style="font-weight:100px;">Payment</h1>
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" name="cardholder" required>
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" required>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="16 Digit Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" pattern="^\d{16}$" name="cardno" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="password" required class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" pattern="^\d{3}$">
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">Proceed for payment</button>
              </div>
            </div>
          </div>
          <input type="hidden" name="pid" value="<?=$id?>">
        </form>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
