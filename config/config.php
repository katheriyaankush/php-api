<?php 
$servername = "us-cdbr-east-04.cleardb.com";
$username = "ba0767c654c59f";
$password = "1e2e0ad6";
$db="heroku_b39ebae5835fce6";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>