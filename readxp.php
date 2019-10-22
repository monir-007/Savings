<?php
include("connection.php");

if(isloggedin()==FALSE)
{

}
else
{

}
  $email = $_SESSION['email'];


//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $conn->query("SELECT * FROM expense WHERE category like '%$searchTerm%' AND username='$email' and isdel='0' group by category");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['category'];
}
//return json data
echo json_encode($data);
?>
