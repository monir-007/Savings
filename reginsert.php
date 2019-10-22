<?php

require_once "connection.php";

$wrongpass = '';
$wronginfo = '<div class="alert alert-danger" role="alert">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Wrong login detail</div>';

if(isloggedin()==FALSE)
{
}
else
{
header("location:profile.php");

}

$email= "";
$pass= "";
$rpass= "";
$fname= "";
$lname= "";
$phone= "";
$gender= "";
$address= "";
$error_array = array(); //Holds error messages

if(isset($_POST['submit'])){

	$fname = strip_tags($_POST['fname']); //Remove html tags
  $fname = str_replace(' ', '', $fname); //remove spaces
  $fname = ucfirst(strtolower($fname)); //Uppercase first letter
	$_SESSION['fname'] = $fname;
  //Stores first name into session variable
	$lname = strip_tags($_POST['lname']); //Remove html tags
  $lname = str_replace(' ', '', $lname); //remove spaces
  $lname = ucfirst(strtolower($lname)); //Uppercase first letter
	$_SESSION['lname'] = $lname; //Stores last name into session variable
  $name = $fname .' '. $lname;  //fullname to database

//Gender
  $gender =$_POST['gender'];
	$_SESSION['gender'] = $gender; //Stores medium into session variable
$phone= $_POST["phone"];
$address = $_POST["address"];


  //email
  $email = strip_tags($_POST['email']); //Remove html tags
	$email = str_replace(' ', '', $email); //remove spaces
	$email = ucfirst(strtolower($email)); //Uppercase first letter
	$_SESSION['email'] = $email; //Stores email into session variable

  //Password
  $pass = strip_tags($_POST['pass']); //Remove html tags
  $rpass = strip_tags($_POST['rpass']); //Remove html tags

  //Check if email is in valid format
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    //Check if email already exists
  $e_check = mysqli_query($conn, "SELECT email FROM reg WHERE email='$email'");

    //Count the number of rows returned
    $num_rows = mysqli_num_rows($e_check);

    if($num_rows > 0) {
      array_push($error_array, "Email already in use<br>");
    }

  }
  else {
    array_push($error_array, "Invalid email format<br>");
  }

  // validation


  	if(strlen($fname) > 25 || strlen($fname) < 2) {
  		array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
  	}

  	if(strlen($lname) > 25 || strlen($lname) < 2) {
  		array_push($error_array,  "Your last name must be between 2 and 25 characters<br>");
  	}

  	if($pass != $rpass) {
  		array_push($error_array,  "Your passwords do not match<br>");
  	}

  		if(preg_match('/[^A-Za-z0-9]/', $pass)) {
  			array_push($error_array, "Your password can only contain english characters or numbers<br>");
  		}


  	if(strlen($pass) > 30 || strlen($pass) < 5) {
  		array_push($error_array, "Your password must be betwen 5 and 30 characters<br>");
  	}

    if(empty($error_array)) {
  		$pass = md5($pass); //Encrypt password before sending to database

      $sql = "INSERT INTO reg(name,email,pass,phone,gender,address)
      VALUES ('$name','$email','$pass','$phone','$gender','$address')";

      if (mysqli_query($conn, $sql))
      {
        header('location:login.php');
      }
        else {

      }


    		setcookie("email",$email,time() + 600000 );
    		setcookie("password",$pass,time() + 600000 );



    		// array_push($error_array, "<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>");

    		//Clear session variables
    		$_SESSION['fname'] = "";
    		$_SESSION['lname'] = "";
    		// $_SESSION['reg_email'] = "";
}
}

//setcookie("email",$email,time() + 600000 );
//setcookie("password",$pass,time() + 600000 );

/*

if ($pass!=$rpass) {
  echo "Password didn't matched";
}
else {
  // code...

$pass = md5($pass); //Encrypt password before sending to database

  $sql = "INSERT INTO reg(name,email,pass,phone,gender,address)
  VALUES ('$name','$email','$pass','$phone','$gender','$address')";


  if (mysqli_query($conn, $sql))
  {
    	$num = 1;//for notification
    header('location: login.php');
  }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
*/

 ?>
