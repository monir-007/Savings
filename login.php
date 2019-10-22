<?php
include("connection.php");

 $wrongpass = '';
 $wronginfo = '<div class="alert alert-danger" role="alert">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Wrong login detail</div>';

 if(isloggedin()==FALSE)
 {
 }
 else
 {
 header("location:profile.php");

 }

 //$rememberme = $_POST["rememberme"];


 if (isset($_POST['email']) && isset($_POST['pass']))
 {
   $pass= mysqli_real_escape_string($conn, $_POST['pass']);
   $email= mysqli_real_escape_string($conn, $_POST['email']);

   if ($email = "105 OR 1=1"|| $email = "\" or \"\"=\"" || $email = "105; DROP TABLE Suppliers" ){
	echo "Invalid Email";
}

   $query = "SELECT * FROM reg where email = '$email'";

   $result = $conn->query($query);

   if ($result->num_rows < 1)
     {
         $wrongpass = $wronginfo;
     }
     while($row = $result->fetch_assoc())
        {

      if(md5($pass)==$row['pass']){

             setcookie('email',$_POST['email'],time()+60*60*7);
             setcookie('pass',$_POST['pass'],time()+60*60*7);
             $_SESSION['logged_in']=TRUE;
             $_SESSION["name"] = $row["name"];
             $_SESSION["email"] =$row["email"];
             $_SESSION["phone"] = $row["phone"];
             $_SESSION["gender"] =$row["gender"];
             $_SESSION["address"] = $row["address"];
             session_start();
             header("location: profile.php");
           }
           else {

            $wrongpass = $wronginfo;
           }
         }

       }

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

  <!--Modal box-->

  <!--/ Modal box-->
    <div id="about" class="about-area1 area-padding3">
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-15 p-b-18">

				<form class="login100-form validate-form" action="login.php" method="POST" >

					<span class="login100-form-title p-b-30">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE["email"])) echo $_COOKIE["email"];?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="<?php if(isset($_COOKIE["pass"])) echo $_COOKIE["pass"];?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="rememberme">
						<label style="font-weight: 400;" class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

                    <?php
                  echo $wrongpass;
                  ?>

					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn">
							Login
						</button>
					</div>


					<div class="text-center w-full p-t-10">
						<span class="txt1">
							Not a member?
						</span>

						<a class="txt1 bo1 hov1" href="registration.php">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
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


<script>

  var a=<?php echo $num; ?>;
  if(a==1){
    s();
  }

  function s(){

     toastr["success"]("Registration Succesful")

      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
  }

</script>

<!-- notification -->
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
<script src="js/toastr.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
