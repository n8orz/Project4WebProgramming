<?php
    session_start();
    //later on this will insert the order into an order table and print a reservation number after validating card info
    //will also wait until this point to insert into the parking or rental table
    //for now it inserts when checking availability
    session_destroy();
    header("Location: ../views/order_submitted.php")
?>