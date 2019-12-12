<?php
session_start(); // Starting the seesion
 
// put the cart array in a session variable
if(!isset($_SESSION['email'])){
    $_SESSION['email'] = "";
}

// This is the server.php file that will treat information received via
// the form submission.

/*Author: Ernest Mujambere
  Version: 1.0.0
  Date: 05/12/2019 */

/*
  "@" in front of function is to hide any warning
  messages that might be displayed.  Need to be removed
  for testing purposes!
*/

  //Initializing variables
  $email_user = "";
  $password_user = "";
  $db = @mysqli_connect("localhost","u383337832_Nathan", "fakepassword", "u383337832_WebPro");
   

//********************************
// This part is the part where we check the user before logging in
// User already registered!!!

// Login User
if(isset($_POST['sign_in_button']))
{
  $email_user = mysqli_real_escape_string($db, $_POST['email']);
  $password_user = mysqli_real_escape_string($db, $_POST['password']);

  if(empty($email_user)) {array_push($errors, "Username is required"); }
  if(empty($password_user)) {array_push($errors, "Password is required"); }

  if(count($errors) == 0)
  {
    $password_hash = md5($password_user);
    $query_log = "SELECT * FROM customer WHERE email = '$email_user' AND password_user = '$password_hash'";
    $results = mysqli_query($db, $query_log);
    if(mysqli_num_rows($results) == 1)
    {
      $_SESSION['email'] = $email_user;
      //echo("we made it");
      header("Location: ../indexCar.php");
    }
    else
    {
      array_push($errors, "Wrong email/password combination");
      header("Location: ../views/login.php");
    }
  }
}
echo $_SESSION['email'];
mysqli_close($db);
 ?>
