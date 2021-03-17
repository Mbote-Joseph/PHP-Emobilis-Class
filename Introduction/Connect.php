<?php
$servername = "localhost";
$username = "root";
$password = "HGFUGJ";

// Create connection
$connect = new mysqli($servername, $username, $password);

// Check database connectivity
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully !! ";

?>