<?php include('../controllers/server.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Sign up</title>
    <link rel="shortcut icon" href="../assests/icons/car-rental-sign-black.png">



</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="../indexCar.html">Webpro Car</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../indexCar.php">Home</a>
            </li>
        </ul>

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Sign up</div>
                        <div class="card-body">
                            <form name="my-form"  method="post" action="sign_up.php">

                                <div class="form-group row">
                                    <label for="firstName" class="col-md-4 col-form-label text-md-right">First name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="first_name" placeholder="Enter your first name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastName" class="col-md-4 col-form-label text-md-right">Last name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="last_name" placeholder="Enter your last name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email_address" placeholder="Enter an email address" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password_1" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password_1" class="form-control" name="password_1" placeholder="Enter your password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password_1" class="col-md-4 col-form-label text-md-right">Confirm password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password_2" class="form-control" name="password_2" placeholder="Confirm your password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="number" id="phone_number" class="form-control" placeholder="Enter a phone number" name="phone_number" required>
                                    </div>
                                </div>





                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="submit_user">
                                        Sign up
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
