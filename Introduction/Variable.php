<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in php</title>
</head>
<body>
<?php
 $firstName="Joseph";
 $lastName="Mbote";
 $email="mbotejoseph001@gmail.com";
 $yearOfBirth=1800;
 $currentYear=2021;
 echo "<h1>Variables in PHP</h1>";
 echo "<h1>$firstName Details</h1>";

 echo "The full Name : $firstName  $lastName";
 echo "<br>";
//  echo $lastName;
//  echo "<br>";
 echo" Your Email :  $email";
 echo "<br>";
 echo "Your age is :  ",$currentYear-$yearOfBirth;

//  Data types in php

// string , floats, boolean , intergers, double, array , null

?>
    
</body>
</html>