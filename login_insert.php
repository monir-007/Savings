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

 $rememberme = $_POST["rememberme"];


 if (isset($_POST['email']) && isset($_POST['pass']))
 {
   $pass= mysqli_real_escape_string($conn, $_POST['pass']);
   $email= mysqli_real_escape_string($conn, $_POST['email']);

   $query = "SELECT * FROM reg where email = '$email'";

   $result = $conn->query($query);

   if ($result->num_rows < 1)
     {
         $wrongpass = $wronginfo;
     }
     while($row = $result->fetch_assoc())
        {
      if(md5($pass)==$row['pass']){

        if(isset($_POST['rememberme'])){
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
           else{
           $_SESSION['logged_in']=TRUE;
           $_SESSION["name"] = $row["name"];
           $_SESSION["email"] =$row["email"];
           $_SESSION["phone"] = $row["phone"];
           $_SESSION["gender"] =$row["gender"];
           $_SESSION["address"] = $row["address"];
           session_start();
           header("location: profile.php");
         }
       }
      else {

            $wrongpass = $wronginfo;
           }
         }

       }


  ?>
