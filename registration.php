
<?php

  session_start();

require_once "connection.php";
require 'reginsert.php';

 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Savings - A Budget Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="css/icon-font.min.css">
  <link rel="stylesheet" href="css/hamburgers.min.css">
  <link href="lib/select2/select2.min.css"  rel="stylesheet" >
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1>Saving<span>s</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>

                </ul>

              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <div id="about" class="about-area1 area-padding3">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-50 p-r-50 p-t-15 p-b-18">
        <form class="login100-form" name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
          <span class="login100-form-title p-b-30">
          Started with Savings
          </span>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="fname" placeholder="First Name" value="<?php
                if(isset($_SESSION['fname'])) {
                  echo $_SESSION['fname'];
                } ?>" required>



            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>

<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your first name must be between 2 and 25 characters</p>"; ?>

          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="lname" placeholder="Last Name" value="<?php
                if(isset($_SESSION['lname'])) {
                  echo $_SESSION['lname'];
                }
            ?>" required>

            <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your last name must be between 2 and 25 characters</p>"; ?>

            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>


        <div class="wrap-input100 validate-input m-b-16">
            <select class="input100"  name="gender" value="<?php
                if(isset($_SESSION['gender'])) {
                  echo $_SESSION['gender'];
                }
            ?>" required>>
        <option value="">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
          </select>


            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <span class="lnr lnr-users"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="email" placeholder="Email" value="<?php
                if(isset($_SESSION['email'])) {
                  echo $_SESSION['email'];
                }
            ?>" required>

            <?php if(in_array("Email already in use<br>", $error_array)) echo "<br><p style='color:red;'>Email already in use</p>"; ?>

            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="phone" placeholder="Phone" value="<?php
                if(isset($_SESSION['phone'])) {
                  echo $_SESSION['phone'];
                }
            ?>" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-phone-handset"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="address" placeholder="Address" value="<?php
                if(isset($_SESSION['address'])) {
                  echo $_SESSION['address'];
                }
            ?>" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-home"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="password" name="pass" placeholder="Password" value="" required>
            	<?php if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your password must be betwen 5 and 30 characters</p>"; ?>

            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="password" name="rpass" placeholder="Re-type Password" value="" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>
          <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "<br><p style='color:red;'>Your passwords do not match</p>"; ?>
          <?php if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<br><p style='color:red;'>Your password can only contain english characters or numbers</p>"; ?>

          <div class="container-login100-form-btn p-t-15">
            <input class="login100-form-btn" type="submit" name="submit" value="Submit">
          </div>


          					<div class="text-center w-full p-t-18 p-b-20">
          						<span class="txt1">
          							Or register with
          						</span>
          					</div>

          					<a href="#" class="btn-face m-b-10">
          						<i class="fa fa-facebook-official"></i>
          						Facebook
          					</a>

          					<a href="#" class="btn-google m-b-10">
          						<img src="img/icon-google.png" alt="GOOGLE">
          						Google
          					</a>

          </div>
        </form>

      </div>
    </div>
</div>
<?php

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
	$_SESSION['phone'] = $phone;
$address = $_POST["address"];
	$_SESSION['address'] = $address;


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

<footer>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <h2>Saving<span>s</span></h2>
              </div>

            </div>
          </div>
        </div>
        <!-- end single footer -->

        <!-- end single footer -->

      </div>
    </div>
  </div>

  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>
              &copy; Copyright <strong>Savings</strong>. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/bootstrap/js/popper.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/select2/select2.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
  <script src="js/script.js"></script>

  </script>
</body>

</html>
