<?php
session_start();
$startDate = "";
  $endDate = "";
 //variables for parking
  $_SESSION['shoppingCart'] = array();
  $errors = array(); // Array that will hold different types of errors messages
  $db = @mysqli_connect("localhost","u383337832_Nathan", "fakepassword", "u383337832_WebPro");
    //Takes user inputted data  
  if(isset($_POST['parkingSubmit'])){
    $startDate = mysqli_real_escape_string($db, $_POST['start_date']);
    $endDate = mysqli_real_escape_string($db, $_POST['end_date']);
  }
  
  if(empty($startDate)) {array_push($errors, "Start date is required"); }
  if(empty($endDate)) {array_push($errors, 'End date is required'); }
  //Creates a query to pull the rows that are already reserved in the timeframe entered by user
  $checkerQuery = "select * from parking
where start_date between '$startDate' and '$endDate'";
$values = mysqli_query($db,$checkerQuery);
//checks the count of reservations in the timeframe, and if the lot is full does not allow user to make a reservation
if(mysqli_num_rows($values)>25){
    array_push($errors, "The lot is full for that timeframe");
}
//if the lot is not full, allows insertion of new reservation into the database and adds spot to shopping cart
else if(mysqli_num_rows($values)<25){
  //$query = "INSERT INTO parking (start_date, end_date)
            //VALUES ('$startDate', '$endDate')";
  //mysqli_query($db, $query);
  array_push($_SESSION['shoppingCart'], "Parking for " . $startDate . $endDate);
  var_dump($_SESSION['shoppingCart']);
  header('Location: ../views/checkout.php');
}
mysqli_close($db);
 ?>
