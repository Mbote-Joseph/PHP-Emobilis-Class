<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connect = new mysqli($servername, $username, $password);

// Check database connectivity
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully !! <br>";

// Creating the Database

$sql ="CREATE DATABASE webdev1";
if($connect->query($sql)=== TRUE){
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $connect->error;
  }

  $connect ->close();
  

?>