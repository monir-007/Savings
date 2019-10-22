<?php

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

  <script type="text/javascript">
      function showData(str) {

          var ajaxRequest; // The variable that makes Ajax possible!

          if (str == "") {
              document.getElementById("txtHint").innerHTML = "Nothing found ";

              return;
          } else {

              try {

                  ajaxRequest = new XMLHttpRequest();
              } catch (e) {

                  try {
                      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  } catch (e) {
                      try {
                          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                      } catch (e) {
                          // Something went wrong
                          alert("Your browser broke!");
                          return false;
                      }
                  }
              }
          }

          // Create a function that will receive data sent from the server
          ajaxRequest.onreadystatechange = function() {
              if (ajaxRequest.readyState == 4) {
                  var ajaxDisplay = document.getElementById('txtHint');
                  ajaxDisplay.innerHTML = ajaxRequest.responseText;
              }
          }
          ajaxRequest.open("GET", "incomefetch.php?p=" + str, true);
          ajaxRequest.send(null);
      }
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
                  <li>
                    <a class="page-scroll" href="profile.php">Profile</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="addincome.php">Add Income</a>
                  </li>
                  <li class="active">
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
              <h2 style="margin-top:20px;">Income List</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group has-search" >
           <input type="text" class="form-control" placeholder="Search" onkeyup="showData(this.value)">
             <p> <span id="txtHint"></span></p>

            <table class="table table-hover table-striped table-bordered ">
               <caption><h4><span class="glyphicon glyphicon-leaf" ></span> Income report for this Year</h4></caption>
            <tr class="info"><th>Date</th> <th> Category</th><th> Money </th><th><a href="incomedelete.php" class='btn btn-sm'>Edit</a></th></tr>

                     <?php

                                         $sql="SELECT * from income where username='$email' AND isdel=0 ORDER by date";

                                         $result = $conn->query($sql);
                                         $inctotal = 0;

                                         if($result->num_rows >0){
                                           while ($row=$result->fetch_assoc()){
                                             $exdate = strtotime($row["date"]);
                                             $exdate = date('d M Y', $exdate);

                                             echo "<tr><td> " . $exdate. "</td> <td> " . $row["category"]. " </td><td> " . $row["amount"]. "</td> <td> <a href='incomedelete.php' class='btn btn-sm' name='remove' value='remove'><span class='glyphicon glyphicon-remove white' aria-hidden='true'></span></a></td></tr>";
                                             $inctotal+=$row["amount"];
                                           }

                                        } else{
                                           echo "<p style='color:red;'>You have No Income Issues.</p>";
                                         }

                                         echo "<tr id='totalincome'><td> </td> <td> Total  </td><td>".$inctotal."</td></tr>";


                                         if(isset($_GET['delincome']))
                                          {
                                              //$id = (int)$_GET['delincome'];
                                              //$removeQuery = "UPDATE income SET isdel='1' Where id=$id AND uid='$sid'";

                                         if (mysqli_query($conn, $removeQuery))
                                         {
                                             echo "
                                            <script>
                                                   alert('Entry Deleted Successfully');
                                                   location.href = 'incomelist.php';
                                             </script>

                                             ";
                                         }

                                          }


                      ?>



   </table>

          </div>


        </div>
      </div>
    </div>
    <!-- End About area -->




<hr style="border: 1px solid #D3D3D3;">

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
