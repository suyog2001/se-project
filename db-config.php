<?php 
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sms";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
