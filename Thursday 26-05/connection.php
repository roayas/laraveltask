<?php
$servername='localhost';
$dbusername='root';
$password='';
$database='testt';

// Create connection
$conn = mysqli_connect($servername,$dbusername, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>