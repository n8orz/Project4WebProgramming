<?php
session_start();
//initialize necessary variables
    $startDate = "";
    $endDate = "";
    $class = "";
 //variables for parking
 if(!isset($_SESSION['shoppingCart'])){
  $_SESSION['shoppingCart'] = array();
 }
  if(!isset($_SESSION['cost'])){
  $_SESSION['cost'] = 0;
 }
  $errors = array(); // Array that will hold different types of errors messages
  $db = @mysqli_connect("localhost","u383337832_Nathan", "fakepassword", "u383337832_WebPro");
    //Takes user inputted data  
  if(isset($_POST['submitCar'])){
    $class = mysqli_real_escape_string($db, $_POST['car_class']);
    $startDate = mysqli_real_escape_string($db, $_POST['time_begin']);
    $endDate = mysqli_real_escape_string($db, $_POST['time_end']);
  }
  
  if(empty($startDate)) {array_push($errors, "Start date is required"); }
  if(empty($endDate)) {array_push($errors, 'End date is required'); }
  if(empty($class)) {array_push($errors, 'Class required'); }
  //Creates a query to pull the rows that are already reserved in the timeframe entered by user
  $checkerQuery = "select * from rentals
where start_date between '$startDate' and '$endDate' AND class='$class'";
$values = mysqli_query($db,$checkerQuery);
//checks the count of reservations in the timeframe, and if the lot is full does not allow user to make a reservation
if(mysqli_num_rows($values)>50){
    array_push($errors, "There are no many cars left in that class at this time.");
}
//if the lot is not full, allows insertion of new reservation into the database and adds spot to shopping cart
else if(mysqli_num_rows($values)<50){
  $query = "INSERT INTO rentals (start_date, end_date, class)
            VALUES ('$startDate', '$endDate', '$class')";
  mysqli_query($db, $query);

  //$tempCost = $_SESSION['cost'];
  //$_SESSION['cost'] = $tempCost + $resCost;
  array_push($_SESSION['shoppingCart'], "Rental for " . $startDate . $endDate );
  header('Location: ../views/checkout.php');
}
mysqli_close($db);
 ?>
