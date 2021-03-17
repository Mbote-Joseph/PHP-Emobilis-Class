<?php
 $firstName="joseph";
 $lastName="mbote";
 $YOB=1850;
 $currentYear=2021;
 define("GREETINGS", "Welcome to PHP Learning , You will enjoy everything !!");
 define("IDEA", "I have no choice but to workhard for myself and my family.");
 function idea(){
     echo IDEA;
 }
 echo "<br>";
 echo GREETINGS;
 
 echo "<br>";
 
 
 echo "The full name is : $firstName $lastName";
 echo "<br>";

 idea();

 echo "<br>";
 $day="monday";

 switch($day){
     case "monday":
        echo "Today is a class day";
        break;
    case "tuesday":
        echo "Today there is party";
        break;
    default :
        echo "The day is just normal and there is nothing much special";

 }
 echo "<br>";

$colors=array("red","margenta", "Blue", "GreenYellow","Baige","NavyBlue");
foreach ($colors as $value){
    echo "$value <br>";
    
}

for($i=0; $i<$colors; $i++){
    
    echo $colors[$i];
    echo "<br>";
}


?>