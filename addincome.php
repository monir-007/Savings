<?php
session_start();
    include("connection.php");

    if(isloggedin()==FALSE)
    {
    header("location:index.php");
    }
    else
    {

    }

  $email = $_SESSION['email'];
    $today = date("Y-m-d");
    $dtstart = date("1950-m-d");
    $thiyear = date("y-01-01");
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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/jquery-ui.css">

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>

  <script>

 $(function() {
    $( "#datepicker1" ).datepicker({dateFormat: "dd-mm-yy"});
    $( "#datepicker2" ).datepicker({dateFormat: "dd-mm-yy"});
    $( "#datepicker3" ).datepicker({dateFormat: "dd-mm-yy"});

  });
  </script>


  <script>
       $(document).ready(function() {
           $('#myForm').ajaxForm(function() {
                alert("Given information Successfully Saved");
                location.href = 'addincome.php';
           });
       });
   </script>

  <script>
  $(function() {
   $( "#edetail" ).autocomplete({
     source: 'readxp.php'
   });
  });
  </script>




</head>

<body data-spy="scroll" data-target="#navbar-example" onLoad="document.showexp.edetail.focus()">

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
                  <li>
                    <a class="page-scroll" href="profile.php">Profile</a>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="addincome.php">Add Income</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="incomelist.php">Income</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="addexpenses.php">Add Expenses</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="expenselist.php">Expenses</a>
                  </li>

                  <a style="margin-top:12px;" class="sus-btn" href="logout.php">Log Out</a>
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



    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2 style="margin-top:20px;"></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="card" style="background-color: rgba(0,128,128,0.2); box-shadow: 0 4px 8px 0	rgba(119,136,153, 0.8);height: 320px;max-width: 600px;margin: auto; text-align: center;font-family: arial;">
            <h2 style="text-align:center"> Income Money</h2>
            <hr>
            <form name="income" action="addincome.php" method="post" name="showexp" id="myForm">

            <div class="form-group">

              <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
            return false;
            return true;
        }
        </script>


             <div class="form-group" style="margin-right:7px;">
               <div class="input-group form_datetime" >
                 <label class="input-group form_datetime" style="size: 16px;float: left;padding:10px; margin-left: 150px;border-radius: 5px;" >Date:</label>
                   <input class="form-control" size="60" style="width:200px;" type="text" name="entrydate" id="datepicker3" readonly  aria-label="..." value="<?php $thisday = strtotime($today);
                 $thisday= date('d-m-Y', $thisday); echo $thisday; ?>">
               </div>
              </div>

              <div class="form-group" style="margin-right:7px;">
                <div class="input-group form_datetime" >
                  <label class="input-group form_datetime" style="size: 16px;float: left;padding:3px; margin-left: 142px;border-radius: 5px;" >Amount:</label>
                    <input class="form-control" size="60" style="width:200px;" type="text" name="eamount" id="eamount" placeholder="Enter amount" required onkeypress="return isNumberKey(event)" >
                </div>
               </div>

               <div class="form-group" style="margin-right:7px;">
                 <div class="input-group form_datetime" >
                   <label class="input-group form_datetime" style="size: 16px;float: left;padding:3px; margin-left: 135px;border-radius: 5px;" >Category:</label>
                   <select class="form-control"  style="width:200px;"  name="edetail" id="edetail" autofocus>
           <option >Category</option>
            <option value="Salary">Salary</option>
            <option value="Business">Business</option>
            <option value="Pension">Pension</option>
            <option value="Housing Property">Housing Property</option>
            <option value="Fixed Deposite">Fixed Deposite</option>
            <option value="Shares">Shares</option>

          </select>
                 </div>
                </div>
                <div class="form-group" style="margin-left:320px;">
                  <div class="input-group form_datetime" >
                    <button class="btn btn-primary" type="submit" name="submit"><b>Add</b> <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>
                  </div>
                </div>


              </form>

<?php
  $email = $_SESSION['email'];
$today = date("Y-m-d");
$dtstart = date("1950-m-d");
$thiyear = date("y-01-01");

if(isset($_POST["entrydate"]) && trim($_POST["entrydate"]) != "")
  {
    $entrydate = $_POST["entrydate"];
    $entrydate = strtotime($entrydate);
    $entrydate= date('Y-m-d', $entrydate);
    $edetail = mysqli_real_escape_string($conn,$_POST["edetail"]);
    $eamount = mysqli_real_escape_string($conn, $_POST["eamount"]);
    $edetail = strip_tags($edetail);
    $eamount = strip_tags($eamount);
    $eamount = floatval($eamount);

    $sql = "INSERT INTO income (username, date, category, amount )
    VALUES ('$email','$entrydate','$edetail','$eamount')";
    if ($conn->query($sql) === TRUE) {

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 ?>


          </div>


                </div>
          <!-- End col-->

        </div>
      </div>
    </div>
    <!-- End About area -->





<hr>

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
<!--  <form name="income" action="incomeinsert.php" method="post" onsubmit="">
      <div></div>
    <table>
      <tr>
        <td style="">Date:</td>
        <td> <input type="date" name="date"></td>
      </tr>
      <tr>
        <td>Amount:</td>
        <td> <input type="text" name="amount" placeholder="Enter amount"></td>
      </tr>
      <tr>
        <td>Category:</td>
        <td> <select name="category">
             <option value="c1">Category 1</option>
             <option value="c2">Category 2</option>
             <option value="c3">Category 3</option>
             <option value="c4">Category 4</option>
             </select>
        </td>
      </tr>
    </table>
    <input style="width:60px;color:white;background-color:#FF9C33;" type="submit" name="submit" placeholder="" value="submit">
  </form>  -->

  <

  <!-- JavaScript Libraries -->

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
</body>

</html>
