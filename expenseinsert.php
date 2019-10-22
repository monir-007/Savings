<?php

    session_start();

require_once "connection.php";

$email = $_SESSION['email']; //session user

$date= $_POST["date"];
$amount= $_POST["amount"];
$category=$_POST["category"];



  // code...
  $sql = "INSERT INTO expense(date,amount,category, username)
  VALUES ('$date','$amount','$category','$email')";

  if (mysqli_query($conn, $sql))
  {

    header('location: addexpenses.php');
  }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }




 ?>
