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

    <style>
      button{
        margin-top: 40px;
        height: 100px;
        width: 70% !important;
      }

      #firstbttn{
        margin-left: 140px;
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
      <li class="nav-item active">
        <a class="nav-link" href="../indexCar.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Rent a car</a>
          <a class="dropdown-item" href="#">Reserve a parking</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Book a flight</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-light my-2 my-sm-0" type="button" href="login.php">Log In</a>
    </form>
  </div>
</nav>

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-6 col-md">
        <button type="button" class="btn btn-outline-secondary btn-lg btn-block" id="firstbttn">Continue as a guest</button>
      </div>
      <div class="col-6 col-md">
        <button type="button" class="btn btn-outline-secondary btn-lg btn-block" id="secondtbttn">Log in</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assests/icons/car-rental-sign-black.png" alt="" width="60" height="60" style="margin-left: 50px;">
        <small class="d-block mb-3 text-muted" style="margin-left: 40px;">&copy;2019-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Car rental</a></li>
          <li><a class="text-muted" href="#">Parking reservation</a></li>
          <li><a class="text-muted" href="#">Flight booking</a></li>
          <li><a class="text-muted" href="#">Monetize your car</a></li>
          <li><a class="text-muted" href="#">Airbnb rental</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Financial resource</a></li>
          <li><a class="text-muted" href="#">Technical ressource</a></li>
          <li><a class="text-muted" href="#">Associate ressource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>

    <!--<script type="text/javascript">
      document.getElementById("firstbttn").onclick = function(){
        location.href="parking_rental.php";
      }; -->
    </script>
  </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
