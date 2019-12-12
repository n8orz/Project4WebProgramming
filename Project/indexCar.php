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
    <link rel="shortcut icon" href="./assests/icons/car-rental-sign-black.png">
    <style>
      #main_pic{
        width: 150%;
      }

      #second_column{
        margin-top: 85px !important;
        max-width: 600px !important;
        margin-left: 200px!important;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="./assests/icons/car-rental-sign.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
          </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./views/car_rental.php">Rent a car</a>
          <a class="dropdown-item" href="./views/parking_rental.php">Reserve a parking</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link" href="./views/login.php">Login</a>
      <a class="nav-link" href="./views/sign_up.php">Signup</a>


    </form>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../Project_4-4/views/checkout.php">
          <img src="./assests/icons/cart_empty.png" width="30" height="30" class="d-inline-block align-top" alt="Cart" style="margin-left: 20px;">
        </a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img id="main_pic" src="./assests/img/car_3.png" alt="Car">
    </div>
    <div id ="second_column" class="col-md-8 text-center">
        <h1 class="display-4 text-center font-weight-normal">Let's take care of your transportation needs</h1>
        <p class="lead text-center">We are Atlanta's premier startup for transportation. We currently offer services ranging from parking arrangements to rental cars and soon to be flight booking. Let us help you get around.</p>

        <p class="text-center">We promise to do our best to get you the best price in town, guaranteed!</p>
        <a class="btn btn-light btn-outline-dark btn-lg " href="#" role="button">Learn more</a>
    </div>
  </div>
</div>
<div class="container">
    <hr>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Our prices are the on the market. Take your pick of prime location parking or pristine rentals</p>
</div>


<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rentals</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$39<small class="text-muted">/day</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Economy to luxury, we've got you covered</li>
          <li>Optional roadside assistance</li>
          <li>Free cancellation*</li>
          <small class="text-muted">*With 30 days advanced notice</small>
        </ul>
        <a type="button" class="btn btn-lg btn-block btn-outline-secondary" role="button" href="./views/car_rental.php">Check Availability</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Parking</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$9 <small class="text-muted">/day</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Advanced reservations so you always have a spot</li>
          <li>Affordable</li>
          <small class="text-muted">Prices subject to surge pricing.</small>
        </ul>
        <a type="button" class="btn btn-lg btn-block btn-outline-secondary" role="button" href="./views/parking_rental.php">Check Availability</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Flights</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted">Starting at</small>$149</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Coming soon</li>
          <li>It will be great</li>
          <li>Phone and email support</li>
          <li>You'll fly</li>
        </ul>
        <a type="button" class="btn btn-lg btn-block btn-outline-secondary" role="button" href="#">Check Availability</a>
      </div>
    </div>
  </div><br><br><hr>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
