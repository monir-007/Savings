<?php

include("connection.php");

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
  <script type="text/javascript" src="lib/jquery/jquery.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  $("#name").keyup(function() {
  var name = $('#name').val();
  if(name=="")
  {
  $("#disp").html("");
  }
  else
  {
  $.ajax({
  type: "POST",
  url: "check.php",
  data: "name="+ name ,
  success: function(html){
  $("#disp").html(html);
  }
  });
  return false;
  }
  });
  });
  </script>


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
        <form class="login100-form"  action="registration.php" method="post" >
          <span class="login100-form-title p-b-30">
          Started with Savings
          </span>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="fname" id="fname" placeholder="First Name" value="" required >

            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="lname" id="lname" placeholder="Last Name" value="" required>


            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>


        <div class="wrap-input100 validate-input m-b-16">
            <select class="input100"  name="gender">
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
            <input class="input100" type="email" id="name" name="email" placeholder="Email" value="" required>

            <div id="disp"></div>

            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="phone" id="phone" name="phone" placeholder="Phone" value="" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-phone-handset"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="text" name="address" placeholder="Address" value="" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-home"></span>
            </span>
          </div>

          <div class="wrap-input100 m-b-16">
            <input class="input100" type="password" id="pass" name="pass" placeholder="Password" value="" required>


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


if(isset($_POST['email']) && trim($_POST['pass']) && ($_POST['fname']) && ($_POST['lname'])  != ""){

  $em_check= mysqli_real_escape_string($conn, $_POST['email']);
  $query="SELECT * from users where email='$em_check'";
  $result = $conn->query($query);

if ($result->num_rows < 1) {

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $fname = strip_tags($fname); //Remove html tags
  $fname = str_replace(' ', '', $fname); //remove spaces
  $fname = ucfirst(strtolower($fname)); //Uppercase first


  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $lname = strip_tags($lname); //Remove html tags
  $lname = str_replace(' ', '', $lname); //remove spaces
  $lname = ucfirst(strtolower($lname)); //Uppercase first letter

  $name = $fname .' '. $lname;  //fullname to database

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $email = strip_tags($email); //Remove html tags
  $email = str_replace(' ', '', $email); //remove spaces
  $email = ucfirst(strtolower($email)); //Uppercase first letter

  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $phone=  mysqli_real_escape_string($conn, $_POST['phone']);
  $phone = strip_tags($phone); //Remove html tags
  $phone = str_replace(' ', '', $phone); //remove spaces

  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $address = strip_tags($address); //Remove html tags


  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $repass = mysqli_real_escape_string($conn, $_POST['rpass']);
  $pass = md5($pass);

  $sql = "INSERT INTO reg(name,email,pass,phone,gender,address)
  VALUES ('$name','$email','$pass','$phone','$gender','$address')";

  if ($conn->query($sql) === TRUE)
    {
    echo '<div class="alert alert-success" role="alert">
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Your account has been created successfully!
  </div>';

  header("location:profile.php");
    } else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else
  {
     echo '<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> You already have an account and can access from login form
  </div>';
  }

}


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
