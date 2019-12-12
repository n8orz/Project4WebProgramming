<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Webpro Car Rental</title>
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
          <a class="dropdown-item" href="car_rental.php">Rent a car</a>
          <a class="dropdown-item" href="#">Reserve parking</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link" href="./views/login.php">Login</a>
      <a class="nav-link" href="./views/sign_up.php">Signup</a>
    </form>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="checkout.php">
          <img src="../assests/icons/cart_empty.png" width="30" height="30" class="d-inline-block align-top" alt="Cart" style="margin-left: 20px;">
        </a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img  id="side_img" src="../assests/img/parking_img.png" alt="Car">
    </div>
    <div id ="second_column" class="col-md-8 text-center">
        <h1 class="display-4 text-center font-weight-normal">It's all start here.</h1>
        <p class="lead text-center">We know that parking can be a tedious task to do or to find, so we decided to simplify for you that process.
                                    Either your are coming in town or going somewhere and want to leave your car in a safe place? You've met the right choice.
                                    We great parking at good price.</p>
    </div>
  </div>
</div>
<form name="my-form" method="POST" action="../controllers/server_parking.php">
<div class="container">
  <p class="text-center display-4">Let's get started</p>
    <hr><br>

    <div class="py-5 text-center">
    <h2>Checkout form</h2>
    <p class="lead">Below is the form to fill in order to get parking availability and exact price.</p>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
        <label for="From">From</label>
        <input type="datetime-local" name="start_date" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="To">To</label>
        <input type="datetime-local" name="end_date" class="form-control">
      </div>

    <div class="col-md-12 mb-3 text-center center">
      <button type="submit" name="parkingSubmit" class="btn btn-primary btn-lg">Check availability</button>
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
