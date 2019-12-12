<?php
session_start();
// Iniatilizing variable we will use to collect data from the form
  $firstName = "";
  $lastName = "";
  $emailAddress = "";
  $passwordOne = "";
  $passwordTwo = "";
  $phoneNumber = "";

  //Array "errors" will hold different type of error from the validation form
  $errors = array();
  if(!isset($_SESSION['email'])){
      $_SESSION['email']="";
  }

  // Establish connection to the database
 $db = @mysqli_connect("localhost","u383337832_Nathan", "fakepassword", "u383337832_WebPro");

// Register the user
  if(isset($_POST['submit_user'])){
    // Receiving all the input values from the form
    $firstName = @mysqli_real_escape_string($db, $_POST['first_name']);
    $lastName = @mysqli_real_escape_string($db, $_POST['last_name']);
    $emailAddress = @mysqli_real_escape_string($db, $_POST['email_address']);
    $passwordOne = @mysqli_real_escape_string($db, $_POST['password_1']);
    $passwordTwo = @mysqli_real_escape_string($db, $_POST['password_2']);
    $phoneNumber = @mysqli_real_escape_string($db, $_POST['phone_number']);
  }

  // Form validation
  /*
    This where we will use the $errors variable to push into
    all the errors that can occur while the user filling up the form.
  */

  if(empty($firstName)) {array_push($errors, "First name is required"); }
  if(empty($lastName)) {array_push($errors, 'Last name is required'); }
  if(empty($emailAddress)) {array_push($errors, 'Email address is required'); }
  if(empty($passwordOne)) {array_push($errors, 'Password is required'); }
  if(empty($passwordTwo)) {array_push($errors, 'Confirmation is required'); }
  if($passwordOne != $passwordTwo){
    array_push($errors, "The two passwords do not match");
  }
  if(empty($phoneNumber)) {array_push($errors, 'Phone number is required'); }
  //if(strlen($phoneNumber) < 10) {array_push($errors, 'Phone number must be 10 digit'); }

  /*
    After cleaning up the date from the form, now we are ready
    to save the date into the database, but first we need to check if
    the user does not exist already.
  */

  // Query the database
  $user_check_query = "SELECT * FROM customer WHERE fname = '$firstName' AND lname = '$lastName' AND email = '$emailAddress' LIMIT 1";
  // Store the result in this variable
  $result = @mysqli_query($db, $user_check_query);
  $user = @mysqli_fetch_assoc($result);

if($user)
{
  if($user['email'] == $emailAddress)
  {
    array_push($errors, "Email already exists");
  }
}

// Final process
// Register the user into the database
if(count($errors) == 0){
  // Encrypt the password before saving it in the database
  $password = md5($passwordOne);

  $query = "INSERT INTO customer (fname, lname, email, password_user, pnumber)
            VALUES ('$firstName', '$lastName', '$emailAddress', '$password', '$phoneNumber')";
  mysqli_query($db, $query);
  $_SESSION['email'] = $emailAddress;
}

    // Close the connection
    mysqli_close($db);
 ?>
