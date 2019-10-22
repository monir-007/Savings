<?php
    session_start();

require_once "connection.php";

$name= $_POST["name"];
$email= $_POST["email"];
$sub=$_POST["subject"];
$message=$_POST["message"];



$name = ucfirst(strtolower($name)); //Uppercase first letter


  $sql = "INSERT INTO contact(name,email,subject,message)
  VALUES ('$name','$email','$sub','$message')";


  if (mysqli_query($conn, $sql))
  {
    	$num = 1;//for notification
    header('location: index.php');
  }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }



 ?>
