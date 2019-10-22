<?php

    session_start();

require_once "connection.php";

  $email = $_SESSION['email'];

$date= $_POST["date"];
$amount= $_POST["amount"];
$category=$_POST["category"];



  // code...
  $sql = "INSERT INTO income(date,amount,category,username)
VALUES ('$date','$amount','$category','$email')";

  if (mysqli_query($conn, $sql))
  {
    echo "New record created successfully";
    header('location: addincome.php');
  }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }




 ?>
