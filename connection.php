<?php

//Script BY Monir

$servername = "localhost";
$username = "root";
$password = "";
$db = "budget";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

@@session_start();

function isloggedin()
{

if(@@$_SESSION['logged_in']!=TRUE)
{
 return FALSE;
}
else
{
return TRUE;
}
}

 ?>
