<?php session_start(); ?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Checkout</title>
    <!-- Icon for tab -->
    <link rel="shortcut icon" href="../assests/icons/car-rental-sign-black.png">


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

    <style>
      #side_img{
        width: 150%;
      }

      #second_column{
        margin-top: 85px !important;
        max-width: 600px !important;
        margin-left: 200px!important;
      }
    </style>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="../indexCar.php">
            <img src="../assests/icons/car-rental-sign.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
          </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Rent a car</a>
          <a class="dropdown-item" href="parking_rental.php">Reserve a parking</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link" href="login.php">Login</a>
      <a class="nav-link" href="sign_up.php">Signup</a>
    </form>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="../assests/icons/cart_empty.png" width="30" height="30" class="d-inline-block align-top" alt="Cart" style="margin-left: 20px;">
        </a>
  </div>
</nav>

    <div class="py-5 text-center">
    <h2>Cart</h2>
    <?php
    if(isset($_SESSION['email']) && $_SESSION['email'!=""]){
        echo("Logged in as: " . $_SESSION['email']);
        echo("<br>");
    }
    else{
        echo("Oops, you better login first");
        echo("<br>");
    }
    if(isset($_SESSION['shoppingCart'])){
    //Loop through it like any other array.
    foreach($_SESSION['shoppingCart'] as $productId){
        //Print out the product ID.
        echo "<div>" . $productId . "</div>", '<br>';
    }
}
else{
    echo("Oops! Your cart is empty. Better get shopping");
}
    ?>
  </div>
<form name="my-form" method="post" action="../controllers/checkout_server.php">
   <div class="row">
     <div class="col-md-6 mb-3">
       <label for="From">Credit Card Number</label>
       <input type="text" name="num" value="" class="form-control">
     </div>
     <div class="col-md-6 mb-3">
       <label for="To">Expiration</label>
       <input type="date" name="exp" value="" class="form-control">
     </div><br>
   </div>

  </div><br>




  <div class="col-md-12 mb-3 text-center center">
    <button type="submit" name="placeOrder" value="" class="btn btn-primary btn-lg">Place Order</button>
  </div>
</div>
</div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
