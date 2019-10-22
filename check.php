<?php

include("connection.php");


if(isset($_POST['email']))
{
$email= mysqli_real_escape_string($conn, $_POST['email']);
$query="SELECT * from reg where email='$email'";
$result = $conn->query($query);
if ($result->num_rows == 0)
{
}
else
{
	echo "<span style='color:red;font-weight: bold;'>You already registered with this email</span>";
}
}
?>
