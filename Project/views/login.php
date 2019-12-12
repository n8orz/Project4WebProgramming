<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <!-- Icon for tab -->
    <link rel="shortcut icon" href="../assests/icons/car-rental-sign-black.png">
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <div class="container">
      <form class="form-signin" method="post" action="../controllers/login_server.php">

        <img clas="mb-4 "src="../assests/icons/car-rental-sign-black.png" alt="User Icon" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"> Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="" required autofocus>
        <label for="inputPassword" class="sr-only">Email address</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" value="" required>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="" value="Remember me"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="sign_in_button">Sign in</button>
        <a class="mt-3 mb-3" href="#">Forgot password?</a>
        <hr>
        <p class="mt-3 mb-3">Don't have an account?<span><a href="sign_up.php"> Sign up</a></span></p>

        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>

      </form>
    </div>










    <!-- Scripts reuired by Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
